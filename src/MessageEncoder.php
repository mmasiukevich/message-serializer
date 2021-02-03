<?php

/**
 * Messages serializer implementation.
 *
 * @author  Maksim Masiukevich <contacts@desperado.dev>
 * @license MIT
 * @license https://opensource.org/licenses/MIT
 */

declare(strict_types = 0);

namespace ServiceBus\MessageSerializer;

/**
 * Encoding a message into a string.
 */
interface MessageEncoder
{
    /**
     * Encode message to string.
     *
     * @throws \ServiceBus\MessageSerializer\Exceptions\EncodeMessageFailed
     */
    public function encode(object $message): string;

    /**
     * Convert object to array.
     *
     * @psalm-return array<string, mixed>
     *
     * @throws \ServiceBus\MessageSerializer\Exceptions\NormalizationFailed Unexpected normalize result
     */
    public function normalize(object $message): array;
}
