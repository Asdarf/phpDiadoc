<?php
/**
 * Auto generated from NonformalizedDocumentStatus.proto at 2015-03-12 11:46:35
 *
 * CRM.Lib.Docflow.Api.Diadoc.Model.NonformalizedDocument package
 */
namespace CRM\Lib\Docflow\Api\Diadoc\Model\NonformalizedDocument {
/**
 * NonformalizedDocumentStatus enum
 */
final class NonformalizedDocumentStatus
{
    const UnknownNonformalizedDocumentStatus = 0;
    const OutboundNoRecipientSignatureRequest = 1;
    const OutboundWaitingForRecipientSignature = 2;
    const OutboundWithRecipientSignature = 3;
    const OutboundRecipientSignatureRequestRejected = 4;
    const OutboundWaitingForSenderSignature = 13;
    const OutboundInvalidSenderSignature = 14;
    const InboundNoRecipientSignatureRequest = 5;
    const InboundWaitingForRecipientSignature = 6;
    const InboundWithRecipientSignature = 7;
    const InboundRecipientSignatureRequestRejected = 8;
    const InboundInvalidRecipientSignature = 15;
    const InternalNoRecipientSignatureRequest = 9;
    const InternalWaitingForRecipientSignature = 10;
    const InternalWithRecipientSignature = 11;
    const InternalRecipientSignatureRequestRejected = 12;
    const InternalWaitingForSenderSignature = 16;
    const InternalInvalidSenderSignature = 17;
    const InternalInvalidRecipientSignature = 18;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'UnknownNonformalizedDocumentStatus' => self::UnknownNonformalizedDocumentStatus,
            'OutboundNoRecipientSignatureRequest' => self::OutboundNoRecipientSignatureRequest,
            'OutboundWaitingForRecipientSignature' => self::OutboundWaitingForRecipientSignature,
            'OutboundWithRecipientSignature' => self::OutboundWithRecipientSignature,
            'OutboundRecipientSignatureRequestRejected' => self::OutboundRecipientSignatureRequestRejected,
            'OutboundWaitingForSenderSignature' => self::OutboundWaitingForSenderSignature,
            'OutboundInvalidSenderSignature' => self::OutboundInvalidSenderSignature,
            'InboundNoRecipientSignatureRequest' => self::InboundNoRecipientSignatureRequest,
            'InboundWaitingForRecipientSignature' => self::InboundWaitingForRecipientSignature,
            'InboundWithRecipientSignature' => self::InboundWithRecipientSignature,
            'InboundRecipientSignatureRequestRejected' => self::InboundRecipientSignatureRequestRejected,
            'InboundInvalidRecipientSignature' => self::InboundInvalidRecipientSignature,
            'InternalNoRecipientSignatureRequest' => self::InternalNoRecipientSignatureRequest,
            'InternalWaitingForRecipientSignature' => self::InternalWaitingForRecipientSignature,
            'InternalWithRecipientSignature' => self::InternalWithRecipientSignature,
            'InternalRecipientSignatureRequestRejected' => self::InternalRecipientSignatureRequestRejected,
            'InternalWaitingForSenderSignature' => self::InternalWaitingForSenderSignature,
            'InternalInvalidSenderSignature' => self::InternalInvalidSenderSignature,
            'InternalInvalidRecipientSignature' => self::InternalInvalidRecipientSignature,
        );
    }
}
}