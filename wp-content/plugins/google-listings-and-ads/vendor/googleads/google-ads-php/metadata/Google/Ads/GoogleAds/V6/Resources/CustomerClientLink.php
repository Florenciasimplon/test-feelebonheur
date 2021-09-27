<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v6/resources/customer_client_link.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V6\Resources;

class CustomerClientLink
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Http::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
7google/ads/googleads/v6/enums/manager_link_status.protogoogle.ads.googleads.v6.enums"�
ManagerLinkStatusEnum"s
ManagerLinkStatus
UNSPECIFIED 
UNKNOWN

ACTIVE
INACTIVE
PENDING
REFUSED
CANCELEDB�
!com.google.ads.googleads.v6.enumsBManagerLinkStatusProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v6/enums;enums�GAA�Google.Ads.GoogleAds.V6.Enums�Google\\Ads\\GoogleAds\\V6\\Enums�!Google::Ads::GoogleAds::V6::Enumsbproto3
�
<google/ads/googleads/v6/resources/customer_client_link.proto!google.ads.googleads.v6.resourcesgoogle/api/field_behavior.protogoogle/api/resource.protogoogle/api/annotations.proto"�
CustomerClientLinkJ
resource_name (	B3�A�A-
+googleads.googleapis.com/CustomerClientLinkG
client_customer (	B)�A�A#
!googleads.googleapis.com/CustomerH �!
manager_link_id (B�AH�V
status (2F.google.ads.googleads.v6.enums.ManagerLinkStatusEnum.ManagerLinkStatus
hidden	 (H�:��A�
+googleads.googleapis.com/CustomerClientLinkRcustomers/{customer_id}/customerClientLinks/{client_customer_id}~{manager_link_id}B
_client_customerB
_manager_link_idB	
_hiddenB�
%com.google.ads.googleads.v6.resourcesBCustomerClientLinkProtoPZJgoogle.golang.org/genproto/googleapis/ads/googleads/v6/resources;resources�GAA�!Google.Ads.GoogleAds.V6.Resources�!Google\\Ads\\GoogleAds\\V6\\Resources�%Google::Ads::GoogleAds::V6::Resourcesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

