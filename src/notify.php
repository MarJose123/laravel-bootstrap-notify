<?php

namespace Marjose\notify;

use Exception;
use Marjose\notify\Storage\Session;

class notify
{
    protected Session $session;

    /**
     * Create a new notify instance.
     *
     * @param  Session  $session
     */
    public function __construct(Session $session)
    {
        $this->session = $session;
    }

    /**
     * Flash an information message.
     *
     * @param  string  $message
     * @param  string|null  $title
     * @return $this
     */
    public function info(string $message, string $title = null): self
    {
        $this->flash($message, 'info', 'fas fa-info-circle', null, $title);

        return $this;
    }

    /**
     * Flash a success message.
     *
     * @param  string  $message
     * @param  string|null  $title
     * @return $this
     */
    public function success(string $message, string $title = null): self
    {
        $this->flash($message, 'success', '✅', null, $title);

        return $this;
    }

    /**
     * Flash an error message.
     *
     * @param  string  $message
     * @param  string|null  $title
     * @return $this
     */
    public function error(string $message, string $title = null): self
    {
        $this->flash($message, 'danger', '❌', null, $title);

        return $this;
    }

    /**
     * Flash a warning message.
     *
     * @param  string  $message
     * @param  string|null  $title
     * @return $this
     */
    public function warning(string $message, string $title = null): self
    {
        $this->flash($message, 'warning', '⚠', null, $title);

        return $this;
    }

    /**
     * Return a preset message that is defined in the config
     * file. If you need to override any of the values, you
     * can pass an array with the key-value pairs of what
     * you want to override.
     *
     * Example: To override the 'message' variable, the array
     *          could have the following structure:
     *
     *          ['message' => 'Your new message here!']
     *
     * @param  string  $presetName
     * @param  array  $overrideValues
     * @return notify
     * @throws Exception
     */
    public function preset(string $presetName, array $overrideValues = []): self
    {
        $presetValues = config('notify.preset-messages.'.$presetName);

        if (! $presetValues) {
            throw new Exception('A preset message does not exist with the name: '.$presetName);
        }

        $this->flash(
            $overrideValues['message'] ?? $presetValues['message'],
            $overrideValues['type'] ?? $presetValues['type'] ?? null,
            $overrideValues['icon'] ?? $presetValues['icon'] ?? null,
            $overrideValues['model'] ?? $presetValues['model'] ?? null,
            $overrideValues['title'] ?? $presetValues['title'] ?? null
        );

        return $this;
    }

    public function flash(string $message, $type = null, $icon = null, string $model = null, string $title = null): void
    {
        $notifications = [
            'message' => $message,
            'type' => $type,
            'icon' => $icon,
            'model' => $model,
            'title' => $title,
        ];

        $this->session->flash('notify', $notifications);
    }

    /**
     * Get the stored message.
     *
     * @return string
     */
    public function message(): string
    {
        return $this->session->get('notify.message');
    }

    /**
     * Get the stored type.
     *
     * @return string
     */
    public function type(): string
    {
        return $this->session->get('notify.type');
    }
}
