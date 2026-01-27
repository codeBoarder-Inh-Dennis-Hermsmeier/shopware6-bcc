<?php declare(strict_types=1);

namespace CodeBoarder\BccMail\Subscriber;

use Shopware\Core\System\SystemConfig\SystemConfigService;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\Mime\Email;

class MailBccSubscriber implements EventSubscriberInterface
{
    private const CONFIG_KEY = 'CodeBoarderBcc.config.bccRecipients';

    public function __construct(private readonly SystemConfigService $systemConfigService)
    {
    }

    public static function getSubscribedEvents(): array
    {
        return [
            'mail.before.send' => 'onMailBeforeSend',
        ];
    }

    public function onMailBeforeSend(object $event): void
    {
        $emailMessage = $this->extractEmailMessage($event);
        if (!$emailMessage instanceof Email) {
            return;
        }

        $bccRecipients = $this->getBccRecipients($event);
        if ($bccRecipients === []) {
            return;
        }

        $existingBccMap = [];
        foreach ($emailMessage->getBcc() as $address) {
            $existingBccMap[strtolower($address->getAddress())] = true;
        }

        foreach ($bccRecipients as $email) {
            $emailKey = strtolower($email);
            if (isset($existingBccMap[$emailKey])) {
                continue;
            }

            $emailMessage->addBcc($email);
            $existingBccMap[$emailKey] = true;
        }
    }

    private function getBccRecipients(object $event): array
    {
        $salesChannelId = $this->resolveSalesChannelId($event);
        $rawRecipients = $this->systemConfigService->get(self::CONFIG_KEY, $salesChannelId);
        if (!is_string($rawRecipients) || trim($rawRecipients) === '') {
            return [];
        }

        return $this->parseRecipients($rawRecipients);
    }

    private function resolveSalesChannelId(object $event): ?string
    {
        if (method_exists($event, 'getSalesChannelId')) {
            $salesChannelId = $event->getSalesChannelId();
            if (is_string($salesChannelId) && $salesChannelId !== '') {
                return $salesChannelId;
            }
        }

        if (method_exists($event, 'getData')) {
            $eventData = $event->getData();
            if (is_array($eventData) && isset($eventData['salesChannelId']) && is_string($eventData['salesChannelId'])) {
                return $eventData['salesChannelId'];
            }
        }

        return null;
    }

    private function extractEmailMessage(object $event): ?Email
    {
        if (method_exists($event, 'getMessage')) {
            $emailMessage = $event->getMessage();
            if ($emailMessage instanceof Email) {
                return $emailMessage;
            }
        }

        if (method_exists($event, 'getEmail')) {
            $emailMessage = $event->getEmail();
            if ($emailMessage instanceof Email) {
                return $emailMessage;
            }
        }

        return null;
    }

    private function parseRecipients(string $raw): array
    {
        $rawParts = preg_split('/[\n,;]+/', $raw);
        $emails = [];

        foreach ($rawParts as $rawPart) {
            $email = trim($rawPart);
            if ($email === '') {
                continue;
            }

            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                continue;
            }

            $emails[$email] = $email;
        }

        return array_values($emails);
    }
}
