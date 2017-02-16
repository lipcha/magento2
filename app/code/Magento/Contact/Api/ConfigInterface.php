<?php
/**
 * Contact module base controller
 */
namespace Magento\Contact\Api;

/**
 * Contact module configuration
 */
interface ConfigInterface
{
    /**
     * Recipient email config path
     */
    const XML_PATH_EMAIL_RECIPIENT = 'contact/email/recipient_email';

    /**
     * Sender email config path
     */
    const XML_PATH_EMAIL_SENDER = 'contact/email/sender_email_identity';

    /**
     * Email template config path
     */
    const XML_PATH_EMAIL_TEMPLATE = 'contact/email/email_template';

    /**
     * Enabled config path
     */
    const XML_PATH_ENABLED = 'contact/contact/enabled';

    /**
     * Check if contacts module is enabled
     *
     * @return bool
     */
    public function isEnabled();

    /**
     * Return email template identifier
     *
     * @return string
     */
    public function emailTemplate();

    /**
     * Return email sender address
     *
     * @return string
     */
    public function emailSender();

    /**
     * Return email recipient address
     *
     * @return mixed
     */
    public function emailRecipient();
}
