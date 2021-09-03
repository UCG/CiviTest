<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use Symfony\Component\DependencyInjection\Exception\LogicException;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;
use Symfony\Component\DependencyInjection\ParameterBag\FrozenParameterBag;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;

/**
 * This class has been auto-generated
 * by the Symfony Dependency Injection Component.
 *
 * @final
 */
class CachedCiviContainer extends Container
{
    private $parameters = [];

    public function __construct()
    {
        $this->parameters = $this->getDefaultParameters();

        $this->services = $this->privates = [];
        $this->syntheticIds = [
            'cache.settings' => true,
            'dispatcher.boot' => true,
            'lockManager' => true,
            'paths' => true,
            'runtime' => true,
            'settings_manager' => true,
            'userPermissionClass' => true,
            'userSystem' => true,
        ];
        $this->methodMap = [
            'Civi_Api4_Event_Subscriber_ContactPreSaveSubscriber' => 'getCiviApi4EventSubscriberContactPreSaveSubscriberService',
            'Civi_Api4_Event_Subscriber_ContributionPreSaveSubscriber' => 'getCiviApi4EventSubscriberContributionPreSaveSubscriberService',
            'Civi_Api4_Event_Subscriber_CustomFieldPreSaveSubscriber' => 'getCiviApi4EventSubscriberCustomFieldPreSaveSubscriberService',
            'Civi_Api4_Event_Subscriber_CustomGroupPreCreationSubscriber' => 'getCiviApi4EventSubscriberCustomGroupPreCreationSubscriberService',
            'Civi_Api4_Event_Subscriber_IsCurrentSubscriber' => 'getCiviApi4EventSubscriberIsCurrentSubscriberService',
            'Civi_Api4_Event_Subscriber_OptionValuePreCreationSubscriber' => 'getCiviApi4EventSubscriberOptionValuePreCreationSubscriberService',
            'Civi_Api4_Event_Subscriber_PermissionCheckSubscriber' => 'getCiviApi4EventSubscriberPermissionCheckSubscriberService',
            'Civi_Api4_Event_Subscriber_ValidateFieldsSubscriber' => 'getCiviApi4EventSubscriberValidateFieldsSubscriberService',
            'Civi_Api4_Service_Spec_Provider_ACLCreationSpecProvider' => 'getCiviApi4ServiceSpecProviderACLCreationSpecProviderService',
            'Civi_Api4_Service_Spec_Provider_ACLEntityRoleCreationSpecProvider' => 'getCiviApi4ServiceSpecProviderACLEntityRoleCreationSpecProviderService',
            'Civi_Api4_Service_Spec_Provider_ActionScheduleCreationSpecProvider' => 'getCiviApi4ServiceSpecProviderActionScheduleCreationSpecProviderService',
            'Civi_Api4_Service_Spec_Provider_ActivitySpecProvider' => 'getCiviApi4ServiceSpecProviderActivitySpecProviderService',
            'Civi_Api4_Service_Spec_Provider_AddressCreationSpecProvider' => 'getCiviApi4ServiceSpecProviderAddressCreationSpecProviderService',
            'Civi_Api4_Service_Spec_Provider_BatchCreationSpecProvider' => 'getCiviApi4ServiceSpecProviderBatchCreationSpecProviderService',
            'Civi_Api4_Service_Spec_Provider_CampaignCreationSpecProvider' => 'getCiviApi4ServiceSpecProviderCampaignCreationSpecProviderService',
            'Civi_Api4_Service_Spec_Provider_CaseCreationSpecProvider' => 'getCiviApi4ServiceSpecProviderCaseCreationSpecProviderService',
            'Civi_Api4_Service_Spec_Provider_CaseTypeGetSpecProvider' => 'getCiviApi4ServiceSpecProviderCaseTypeGetSpecProviderService',
            'Civi_Api4_Service_Spec_Provider_ContactCreationSpecProvider' => 'getCiviApi4ServiceSpecProviderContactCreationSpecProviderService',
            'Civi_Api4_Service_Spec_Provider_ContactGetSpecProvider' => 'getCiviApi4ServiceSpecProviderContactGetSpecProviderService',
            'Civi_Api4_Service_Spec_Provider_ContactTypeCreationSpecProvider' => 'getCiviApi4ServiceSpecProviderContactTypeCreationSpecProviderService',
            'Civi_Api4_Service_Spec_Provider_ContributionCreationSpecProvider' => 'getCiviApi4ServiceSpecProviderContributionCreationSpecProviderService',
            'Civi_Api4_Service_Spec_Provider_ContributionRecurCreationSpecProvider' => 'getCiviApi4ServiceSpecProviderContributionRecurCreationSpecProviderService',
            'Civi_Api4_Service_Spec_Provider_CustomFieldCreationSpecProvider' => 'getCiviApi4ServiceSpecProviderCustomFieldCreationSpecProviderService',
            'Civi_Api4_Service_Spec_Provider_CustomGroupCreationSpecProvider' => 'getCiviApi4ServiceSpecProviderCustomGroupCreationSpecProviderService',
            'Civi_Api4_Service_Spec_Provider_CustomValueSpecProvider' => 'getCiviApi4ServiceSpecProviderCustomValueSpecProviderService',
            'Civi_Api4_Service_Spec_Provider_DefaultLocationTypeProvider' => 'getCiviApi4ServiceSpecProviderDefaultLocationTypeProviderService',
            'Civi_Api4_Service_Spec_Provider_DomainCreationSpecProvider' => 'getCiviApi4ServiceSpecProviderDomainCreationSpecProviderService',
            'Civi_Api4_Service_Spec_Provider_EmailCreationSpecProvider' => 'getCiviApi4ServiceSpecProviderEmailCreationSpecProviderService',
            'Civi_Api4_Service_Spec_Provider_EntityTagCreationSpecProvider' => 'getCiviApi4ServiceSpecProviderEntityTagCreationSpecProviderService',
            'Civi_Api4_Service_Spec_Provider_EntityTagFilterSpecProvider' => 'getCiviApi4ServiceSpecProviderEntityTagFilterSpecProviderService',
            'Civi_Api4_Service_Spec_Provider_EventCreationSpecProvider' => 'getCiviApi4ServiceSpecProviderEventCreationSpecProviderService',
            'Civi_Api4_Service_Spec_Provider_FieldCurrencySpecProvider' => 'getCiviApi4ServiceSpecProviderFieldCurrencySpecProviderService',
            'Civi_Api4_Service_Spec_Provider_FieldDomainIdSpecProvider' => 'getCiviApi4ServiceSpecProviderFieldDomainIdSpecProviderService',
            'Civi_Api4_Service_Spec_Provider_FinancialItemCreationSpecProvider' => 'getCiviApi4ServiceSpecProviderFinancialItemCreationSpecProviderService',
            'Civi_Api4_Service_Spec_Provider_GetActionDefaultsProvider' => 'getCiviApi4ServiceSpecProviderGetActionDefaultsProviderService',
            'Civi_Api4_Service_Spec_Provider_GroupCreationSpecProvider' => 'getCiviApi4ServiceSpecProviderGroupCreationSpecProviderService',
            'Civi_Api4_Service_Spec_Provider_IsCurrentFieldSpecProvider' => 'getCiviApi4ServiceSpecProviderIsCurrentFieldSpecProviderService',
            'Civi_Api4_Service_Spec_Provider_MappingCreationSpecProvider' => 'getCiviApi4ServiceSpecProviderMappingCreationSpecProviderService',
            'Civi_Api4_Service_Spec_Provider_NavigationSpecProvider' => 'getCiviApi4ServiceSpecProviderNavigationSpecProviderService',
            'Civi_Api4_Service_Spec_Provider_NoteCreationSpecProvider' => 'getCiviApi4ServiceSpecProviderNoteCreationSpecProviderService',
            'Civi_Api4_Service_Spec_Provider_OptionValueCreationSpecProvider' => 'getCiviApi4ServiceSpecProviderOptionValueCreationSpecProviderService',
            'Civi_Api4_Service_Spec_Provider_PaymentProcessorCreationSpecProvider' => 'getCiviApi4ServiceSpecProviderPaymentProcessorCreationSpecProviderService',
            'Civi_Api4_Service_Spec_Provider_PaymentProcessorTypeCreationSpecProvider' => 'getCiviApi4ServiceSpecProviderPaymentProcessorTypeCreationSpecProviderService',
            'Civi_Api4_Service_Spec_Provider_PhoneCreationSpecProvider' => 'getCiviApi4ServiceSpecProviderPhoneCreationSpecProviderService',
            'Civi_Api4_Service_Spec_Provider_PriceFieldValueCreationSpecProvider' => 'getCiviApi4ServiceSpecProviderPriceFieldValueCreationSpecProviderService',
            'Civi_Api4_Service_Spec_Provider_RelationshipTypeCreationSpecProvider' => 'getCiviApi4ServiceSpecProviderRelationshipTypeCreationSpecProviderService',
            'Civi_Api4_Service_Spec_Provider_TagCreationSpecProvider' => 'getCiviApi4ServiceSpecProviderTagCreationSpecProviderService',
            'Civi_Api4_Service_Spec_Provider_UFFieldCreationSpecProvider' => 'getCiviApi4ServiceSpecProviderUFFieldCreationSpecProviderService',
            'action_object_provider' => 'getActionObjectProviderService',
            'angular' => 'getAngularService',
            'angularjs.loader' => 'getAngularjs_LoaderService',
            'asset_builder' => 'getAssetBuilderService',
            'bundle.bootstrap3' => 'getBundle_Bootstrap3Service',
            'bundle.coreResources' => 'getBundle_CoreResourcesService',
            'bundle.coreStyles' => 'getBundle_CoreStylesService',
            'cache.checks' => 'getCache_ChecksService',
            'cache.community_messages' => 'getCache_CommunityMessagesService',
            'cache.contactTypes' => 'getCache_ContactTypesService',
            'cache.customData' => 'getCache_CustomDataService',
            'cache.default' => 'getCache_DefaultService',
            'cache.fields' => 'getCache_FieldsService',
            'cache.groups' => 'getCache_GroupsService',
            'cache.js_strings' => 'getCache_JsStringsService',
            'cache.long' => 'getCache_LongService',
            'cache.metadata' => 'getCache_MetadataService',
            'cache.navigation' => 'getCache_NavigationService',
            'cache.prevNextCache' => 'getCache_PrevNextCacheService',
            'cache.session' => 'getCache_SessionService',
            'cache_config' => 'getCacheConfigService',
            'civi.activity.triggers' => 'getCivi_Activity_TriggersService',
            'civi.case.staticTriggers' => 'getCivi_Case_StaticTriggersService',
            'civi.case.triggers' => 'getCivi_Case_TriggersService',
            'civi_api_kernel' => 'getCiviApiKernelService',
            'civi_token_compat' => 'getCiviTokenCompatService',
            'crm_activity_tokens' => 'getCrmActivityTokensService',
            'crm_contribute_tokens' => 'getCrmContributeTokensService',
            'crm_event_tokens' => 'getCrmEventTokensService',
            'crm_mailing_action_tokens' => 'getCrmMailingActionTokensService',
            'crm_mailing_tokens' => 'getCrmMailingTokensService',
            'crm_member_tokens' => 'getCrmMemberTokensService',
            'crypto.jwt' => 'getCrypto_JwtService',
            'crypto.registry' => 'getCrypto_RegistryService',
            'crypto.token' => 'getCrypto_TokenService',
            'cxn_reg_client' => 'getCxnRegClientService',
            'dispatcher' => 'getDispatcherService',
            'httpClient' => 'getHttpClientService',
            'i18n' => 'getI18nService',
            'joiner' => 'getJoinerService',
            'magic_function_provider' => 'getMagicFunctionProviderService',
            'pear_mail' => 'getPearMailService',
            'prevnext' => 'getPrevnextService',
            'prevnext.driver.redis' => 'getPrevnext_Driver_RedisService',
            'prevnext.driver.sql' => 'getPrevnext_Driver_SqlService',
            'psr_log' => 'getPsrLogService',
            'psr_log_manager' => 'getPsrLogManagerService',
            'resources' => 'getResourcesService',
            'resources.js_strings' => 'getResources_JsStringsService',
            'schema_map' => 'getSchemaMapService',
            'spec_gatherer' => 'getSpecGathererService',
            'sql_triggers' => 'getSqlTriggersService',
            'themes' => 'getThemesService',
        ];
        $this->aliases = [
            'cache.short' => 'cache.default',
        ];
    }

    public function compile(): void
    {
        throw new LogicException('You cannot compile a dumped container that was already compiled.');
    }

    public function isCompiled(): bool
    {
        return true;
    }

    public function getRemovedIds(): array
    {
        return [
            'Psr\\Container\\ContainerInterface' => true,
            'Symfony\\Component\\DependencyInjection\\ContainerInterface' => true,
            'civi_container_factory' => true,
            'schema_map_builder' => true,
        ];
    }

    /**
     * Gets the public 'Civi_Api4_Event_Subscriber_ContactPreSaveSubscriber' shared service.
     *
     * @return \Civi\Api4\Event\Subscriber\ContactPreSaveSubscriber
     */
    protected function getCiviApi4EventSubscriberContactPreSaveSubscriberService()
    {
        return $this->services['Civi_Api4_Event_Subscriber_ContactPreSaveSubscriber'] = new \Civi\Api4\Event\Subscriber\ContactPreSaveSubscriber();
    }

    /**
     * Gets the public 'Civi_Api4_Event_Subscriber_ContributionPreSaveSubscriber' shared service.
     *
     * @return \Civi\Api4\Event\Subscriber\ContributionPreSaveSubscriber
     */
    protected function getCiviApi4EventSubscriberContributionPreSaveSubscriberService()
    {
        return $this->services['Civi_Api4_Event_Subscriber_ContributionPreSaveSubscriber'] = new \Civi\Api4\Event\Subscriber\ContributionPreSaveSubscriber();
    }

    /**
     * Gets the public 'Civi_Api4_Event_Subscriber_CustomFieldPreSaveSubscriber' shared service.
     *
     * @return \Civi\Api4\Event\Subscriber\CustomFieldPreSaveSubscriber
     */
    protected function getCiviApi4EventSubscriberCustomFieldPreSaveSubscriberService()
    {
        return $this->services['Civi_Api4_Event_Subscriber_CustomFieldPreSaveSubscriber'] = new \Civi\Api4\Event\Subscriber\CustomFieldPreSaveSubscriber();
    }

    /**
     * Gets the public 'Civi_Api4_Event_Subscriber_CustomGroupPreCreationSubscriber' shared service.
     *
     * @return \Civi\Api4\Event\Subscriber\CustomGroupPreCreationSubscriber
     */
    protected function getCiviApi4EventSubscriberCustomGroupPreCreationSubscriberService()
    {
        return $this->services['Civi_Api4_Event_Subscriber_CustomGroupPreCreationSubscriber'] = new \Civi\Api4\Event\Subscriber\CustomGroupPreCreationSubscriber();
    }

    /**
     * Gets the public 'Civi_Api4_Event_Subscriber_IsCurrentSubscriber' shared service.
     *
     * @return \Civi\Api4\Event\Subscriber\IsCurrentSubscriber
     */
    protected function getCiviApi4EventSubscriberIsCurrentSubscriberService()
    {
        return $this->services['Civi_Api4_Event_Subscriber_IsCurrentSubscriber'] = new \Civi\Api4\Event\Subscriber\IsCurrentSubscriber();
    }

    /**
     * Gets the public 'Civi_Api4_Event_Subscriber_OptionValuePreCreationSubscriber' shared service.
     *
     * @return \Civi\Api4\Event\Subscriber\OptionValuePreCreationSubscriber
     */
    protected function getCiviApi4EventSubscriberOptionValuePreCreationSubscriberService()
    {
        return $this->services['Civi_Api4_Event_Subscriber_OptionValuePreCreationSubscriber'] = new \Civi\Api4\Event\Subscriber\OptionValuePreCreationSubscriber();
    }

    /**
     * Gets the public 'Civi_Api4_Event_Subscriber_PermissionCheckSubscriber' shared service.
     *
     * @return \Civi\Api4\Event\Subscriber\PermissionCheckSubscriber
     */
    protected function getCiviApi4EventSubscriberPermissionCheckSubscriberService()
    {
        return $this->services['Civi_Api4_Event_Subscriber_PermissionCheckSubscriber'] = new \Civi\Api4\Event\Subscriber\PermissionCheckSubscriber();
    }

    /**
     * Gets the public 'Civi_Api4_Event_Subscriber_ValidateFieldsSubscriber' shared service.
     *
     * @return \Civi\Api4\Event\Subscriber\ValidateFieldsSubscriber
     */
    protected function getCiviApi4EventSubscriberValidateFieldsSubscriberService()
    {
        return $this->services['Civi_Api4_Event_Subscriber_ValidateFieldsSubscriber'] = new \Civi\Api4\Event\Subscriber\ValidateFieldsSubscriber();
    }

    /**
     * Gets the public 'Civi_Api4_Service_Spec_Provider_ACLCreationSpecProvider' shared service.
     *
     * @return \Civi\Api4\Service\Spec\Provider\ACLCreationSpecProvider
     */
    protected function getCiviApi4ServiceSpecProviderACLCreationSpecProviderService()
    {
        return $this->services['Civi_Api4_Service_Spec_Provider_ACLCreationSpecProvider'] = new \Civi\Api4\Service\Spec\Provider\ACLCreationSpecProvider();
    }

    /**
     * Gets the public 'Civi_Api4_Service_Spec_Provider_ACLEntityRoleCreationSpecProvider' shared service.
     *
     * @return \Civi\Api4\Service\Spec\Provider\ACLEntityRoleCreationSpecProvider
     */
    protected function getCiviApi4ServiceSpecProviderACLEntityRoleCreationSpecProviderService()
    {
        return $this->services['Civi_Api4_Service_Spec_Provider_ACLEntityRoleCreationSpecProvider'] = new \Civi\Api4\Service\Spec\Provider\ACLEntityRoleCreationSpecProvider();
    }

    /**
     * Gets the public 'Civi_Api4_Service_Spec_Provider_ActionScheduleCreationSpecProvider' shared service.
     *
     * @return \Civi\Api4\Service\Spec\Provider\ActionScheduleCreationSpecProvider
     */
    protected function getCiviApi4ServiceSpecProviderActionScheduleCreationSpecProviderService()
    {
        return $this->services['Civi_Api4_Service_Spec_Provider_ActionScheduleCreationSpecProvider'] = new \Civi\Api4\Service\Spec\Provider\ActionScheduleCreationSpecProvider();
    }

    /**
     * Gets the public 'Civi_Api4_Service_Spec_Provider_ActivitySpecProvider' shared service.
     *
     * @return \Civi\Api4\Service\Spec\Provider\ActivitySpecProvider
     */
    protected function getCiviApi4ServiceSpecProviderActivitySpecProviderService()
    {
        return $this->services['Civi_Api4_Service_Spec_Provider_ActivitySpecProvider'] = new \Civi\Api4\Service\Spec\Provider\ActivitySpecProvider();
    }

    /**
     * Gets the public 'Civi_Api4_Service_Spec_Provider_AddressCreationSpecProvider' shared service.
     *
     * @return \Civi\Api4\Service\Spec\Provider\AddressCreationSpecProvider
     */
    protected function getCiviApi4ServiceSpecProviderAddressCreationSpecProviderService()
    {
        return $this->services['Civi_Api4_Service_Spec_Provider_AddressCreationSpecProvider'] = new \Civi\Api4\Service\Spec\Provider\AddressCreationSpecProvider();
    }

    /**
     * Gets the public 'Civi_Api4_Service_Spec_Provider_BatchCreationSpecProvider' shared service.
     *
     * @return \Civi\Api4\Service\Spec\Provider\BatchCreationSpecProvider
     */
    protected function getCiviApi4ServiceSpecProviderBatchCreationSpecProviderService()
    {
        return $this->services['Civi_Api4_Service_Spec_Provider_BatchCreationSpecProvider'] = new \Civi\Api4\Service\Spec\Provider\BatchCreationSpecProvider();
    }

    /**
     * Gets the public 'Civi_Api4_Service_Spec_Provider_CampaignCreationSpecProvider' shared service.
     *
     * @return \Civi\Api4\Service\Spec\Provider\CampaignCreationSpecProvider
     */
    protected function getCiviApi4ServiceSpecProviderCampaignCreationSpecProviderService()
    {
        return $this->services['Civi_Api4_Service_Spec_Provider_CampaignCreationSpecProvider'] = new \Civi\Api4\Service\Spec\Provider\CampaignCreationSpecProvider();
    }

    /**
     * Gets the public 'Civi_Api4_Service_Spec_Provider_CaseCreationSpecProvider' shared service.
     *
     * @return \Civi\Api4\Service\Spec\Provider\CaseCreationSpecProvider
     */
    protected function getCiviApi4ServiceSpecProviderCaseCreationSpecProviderService()
    {
        return $this->services['Civi_Api4_Service_Spec_Provider_CaseCreationSpecProvider'] = new \Civi\Api4\Service\Spec\Provider\CaseCreationSpecProvider();
    }

    /**
     * Gets the public 'Civi_Api4_Service_Spec_Provider_CaseTypeGetSpecProvider' shared service.
     *
     * @return \Civi\Api4\Service\Spec\Provider\CaseTypeGetSpecProvider
     */
    protected function getCiviApi4ServiceSpecProviderCaseTypeGetSpecProviderService()
    {
        return $this->services['Civi_Api4_Service_Spec_Provider_CaseTypeGetSpecProvider'] = new \Civi\Api4\Service\Spec\Provider\CaseTypeGetSpecProvider();
    }

    /**
     * Gets the public 'Civi_Api4_Service_Spec_Provider_ContactCreationSpecProvider' shared service.
     *
     * @return \Civi\Api4\Service\Spec\Provider\ContactCreationSpecProvider
     */
    protected function getCiviApi4ServiceSpecProviderContactCreationSpecProviderService()
    {
        return $this->services['Civi_Api4_Service_Spec_Provider_ContactCreationSpecProvider'] = new \Civi\Api4\Service\Spec\Provider\ContactCreationSpecProvider();
    }

    /**
     * Gets the public 'Civi_Api4_Service_Spec_Provider_ContactGetSpecProvider' shared service.
     *
     * @return \Civi\Api4\Service\Spec\Provider\ContactGetSpecProvider
     */
    protected function getCiviApi4ServiceSpecProviderContactGetSpecProviderService()
    {
        return $this->services['Civi_Api4_Service_Spec_Provider_ContactGetSpecProvider'] = new \Civi\Api4\Service\Spec\Provider\ContactGetSpecProvider();
    }

    /**
     * Gets the public 'Civi_Api4_Service_Spec_Provider_ContactTypeCreationSpecProvider' shared service.
     *
     * @return \Civi\Api4\Service\Spec\Provider\ContactTypeCreationSpecProvider
     */
    protected function getCiviApi4ServiceSpecProviderContactTypeCreationSpecProviderService()
    {
        return $this->services['Civi_Api4_Service_Spec_Provider_ContactTypeCreationSpecProvider'] = new \Civi\Api4\Service\Spec\Provider\ContactTypeCreationSpecProvider();
    }

    /**
     * Gets the public 'Civi_Api4_Service_Spec_Provider_ContributionCreationSpecProvider' shared service.
     *
     * @return \Civi\Api4\Service\Spec\Provider\ContributionCreationSpecProvider
     */
    protected function getCiviApi4ServiceSpecProviderContributionCreationSpecProviderService()
    {
        return $this->services['Civi_Api4_Service_Spec_Provider_ContributionCreationSpecProvider'] = new \Civi\Api4\Service\Spec\Provider\ContributionCreationSpecProvider();
    }

    /**
     * Gets the public 'Civi_Api4_Service_Spec_Provider_ContributionRecurCreationSpecProvider' shared service.
     *
     * @return \Civi\Api4\Service\Spec\Provider\ContributionRecurCreationSpecProvider
     */
    protected function getCiviApi4ServiceSpecProviderContributionRecurCreationSpecProviderService()
    {
        return $this->services['Civi_Api4_Service_Spec_Provider_ContributionRecurCreationSpecProvider'] = new \Civi\Api4\Service\Spec\Provider\ContributionRecurCreationSpecProvider();
    }

    /**
     * Gets the public 'Civi_Api4_Service_Spec_Provider_CustomFieldCreationSpecProvider' shared service.
     *
     * @return \Civi\Api4\Service\Spec\Provider\CustomFieldCreationSpecProvider
     */
    protected function getCiviApi4ServiceSpecProviderCustomFieldCreationSpecProviderService()
    {
        return $this->services['Civi_Api4_Service_Spec_Provider_CustomFieldCreationSpecProvider'] = new \Civi\Api4\Service\Spec\Provider\CustomFieldCreationSpecProvider();
    }

    /**
     * Gets the public 'Civi_Api4_Service_Spec_Provider_CustomGroupCreationSpecProvider' shared service.
     *
     * @return \Civi\Api4\Service\Spec\Provider\CustomGroupCreationSpecProvider
     */
    protected function getCiviApi4ServiceSpecProviderCustomGroupCreationSpecProviderService()
    {
        return $this->services['Civi_Api4_Service_Spec_Provider_CustomGroupCreationSpecProvider'] = new \Civi\Api4\Service\Spec\Provider\CustomGroupCreationSpecProvider();
    }

    /**
     * Gets the public 'Civi_Api4_Service_Spec_Provider_CustomValueSpecProvider' shared service.
     *
     * @return \Civi\Api4\Service\Spec\Provider\CustomValueSpecProvider
     */
    protected function getCiviApi4ServiceSpecProviderCustomValueSpecProviderService()
    {
        return $this->services['Civi_Api4_Service_Spec_Provider_CustomValueSpecProvider'] = new \Civi\Api4\Service\Spec\Provider\CustomValueSpecProvider();
    }

    /**
     * Gets the public 'Civi_Api4_Service_Spec_Provider_DefaultLocationTypeProvider' shared service.
     *
     * @return \Civi\Api4\Service\Spec\Provider\DefaultLocationTypeProvider
     */
    protected function getCiviApi4ServiceSpecProviderDefaultLocationTypeProviderService()
    {
        return $this->services['Civi_Api4_Service_Spec_Provider_DefaultLocationTypeProvider'] = new \Civi\Api4\Service\Spec\Provider\DefaultLocationTypeProvider();
    }

    /**
     * Gets the public 'Civi_Api4_Service_Spec_Provider_DomainCreationSpecProvider' shared service.
     *
     * @return \Civi\Api4\Service\Spec\Provider\DomainCreationSpecProvider
     */
    protected function getCiviApi4ServiceSpecProviderDomainCreationSpecProviderService()
    {
        return $this->services['Civi_Api4_Service_Spec_Provider_DomainCreationSpecProvider'] = new \Civi\Api4\Service\Spec\Provider\DomainCreationSpecProvider();
    }

    /**
     * Gets the public 'Civi_Api4_Service_Spec_Provider_EmailCreationSpecProvider' shared service.
     *
     * @return \Civi\Api4\Service\Spec\Provider\EmailCreationSpecProvider
     */
    protected function getCiviApi4ServiceSpecProviderEmailCreationSpecProviderService()
    {
        return $this->services['Civi_Api4_Service_Spec_Provider_EmailCreationSpecProvider'] = new \Civi\Api4\Service\Spec\Provider\EmailCreationSpecProvider();
    }

    /**
     * Gets the public 'Civi_Api4_Service_Spec_Provider_EntityTagCreationSpecProvider' shared service.
     *
     * @return \Civi\Api4\Service\Spec\Provider\EntityTagCreationSpecProvider
     */
    protected function getCiviApi4ServiceSpecProviderEntityTagCreationSpecProviderService()
    {
        return $this->services['Civi_Api4_Service_Spec_Provider_EntityTagCreationSpecProvider'] = new \Civi\Api4\Service\Spec\Provider\EntityTagCreationSpecProvider();
    }

    /**
     * Gets the public 'Civi_Api4_Service_Spec_Provider_EntityTagFilterSpecProvider' shared service.
     *
     * @return \Civi\Api4\Service\Spec\Provider\EntityTagFilterSpecProvider
     */
    protected function getCiviApi4ServiceSpecProviderEntityTagFilterSpecProviderService()
    {
        return $this->services['Civi_Api4_Service_Spec_Provider_EntityTagFilterSpecProvider'] = new \Civi\Api4\Service\Spec\Provider\EntityTagFilterSpecProvider();
    }

    /**
     * Gets the public 'Civi_Api4_Service_Spec_Provider_EventCreationSpecProvider' shared service.
     *
     * @return \Civi\Api4\Service\Spec\Provider\EventCreationSpecProvider
     */
    protected function getCiviApi4ServiceSpecProviderEventCreationSpecProviderService()
    {
        return $this->services['Civi_Api4_Service_Spec_Provider_EventCreationSpecProvider'] = new \Civi\Api4\Service\Spec\Provider\EventCreationSpecProvider();
    }

    /**
     * Gets the public 'Civi_Api4_Service_Spec_Provider_FieldCurrencySpecProvider' shared service.
     *
     * @return \Civi\Api4\Service\Spec\Provider\FieldCurrencySpecProvider
     */
    protected function getCiviApi4ServiceSpecProviderFieldCurrencySpecProviderService()
    {
        return $this->services['Civi_Api4_Service_Spec_Provider_FieldCurrencySpecProvider'] = new \Civi\Api4\Service\Spec\Provider\FieldCurrencySpecProvider();
    }

    /**
     * Gets the public 'Civi_Api4_Service_Spec_Provider_FieldDomainIdSpecProvider' shared service.
     *
     * @return \Civi\Api4\Service\Spec\Provider\FieldDomainIdSpecProvider
     */
    protected function getCiviApi4ServiceSpecProviderFieldDomainIdSpecProviderService()
    {
        return $this->services['Civi_Api4_Service_Spec_Provider_FieldDomainIdSpecProvider'] = new \Civi\Api4\Service\Spec\Provider\FieldDomainIdSpecProvider();
    }

    /**
     * Gets the public 'Civi_Api4_Service_Spec_Provider_FinancialItemCreationSpecProvider' shared service.
     *
     * @return \Civi\Api4\Service\Spec\Provider\FinancialItemCreationSpecProvider
     */
    protected function getCiviApi4ServiceSpecProviderFinancialItemCreationSpecProviderService()
    {
        return $this->services['Civi_Api4_Service_Spec_Provider_FinancialItemCreationSpecProvider'] = new \Civi\Api4\Service\Spec\Provider\FinancialItemCreationSpecProvider();
    }

    /**
     * Gets the public 'Civi_Api4_Service_Spec_Provider_GetActionDefaultsProvider' shared service.
     *
     * @return \Civi\Api4\Service\Spec\Provider\GetActionDefaultsProvider
     */
    protected function getCiviApi4ServiceSpecProviderGetActionDefaultsProviderService()
    {
        return $this->services['Civi_Api4_Service_Spec_Provider_GetActionDefaultsProvider'] = new \Civi\Api4\Service\Spec\Provider\GetActionDefaultsProvider();
    }

    /**
     * Gets the public 'Civi_Api4_Service_Spec_Provider_GroupCreationSpecProvider' shared service.
     *
     * @return \Civi\Api4\Service\Spec\Provider\GroupCreationSpecProvider
     */
    protected function getCiviApi4ServiceSpecProviderGroupCreationSpecProviderService()
    {
        return $this->services['Civi_Api4_Service_Spec_Provider_GroupCreationSpecProvider'] = new \Civi\Api4\Service\Spec\Provider\GroupCreationSpecProvider();
    }

    /**
     * Gets the public 'Civi_Api4_Service_Spec_Provider_IsCurrentFieldSpecProvider' shared service.
     *
     * @return \Civi\Api4\Service\Spec\Provider\IsCurrentFieldSpecProvider
     */
    protected function getCiviApi4ServiceSpecProviderIsCurrentFieldSpecProviderService()
    {
        return $this->services['Civi_Api4_Service_Spec_Provider_IsCurrentFieldSpecProvider'] = new \Civi\Api4\Service\Spec\Provider\IsCurrentFieldSpecProvider();
    }

    /**
     * Gets the public 'Civi_Api4_Service_Spec_Provider_MappingCreationSpecProvider' shared service.
     *
     * @return \Civi\Api4\Service\Spec\Provider\MappingCreationSpecProvider
     */
    protected function getCiviApi4ServiceSpecProviderMappingCreationSpecProviderService()
    {
        return $this->services['Civi_Api4_Service_Spec_Provider_MappingCreationSpecProvider'] = new \Civi\Api4\Service\Spec\Provider\MappingCreationSpecProvider();
    }

    /**
     * Gets the public 'Civi_Api4_Service_Spec_Provider_NavigationSpecProvider' shared service.
     *
     * @return \Civi\Api4\Service\Spec\Provider\NavigationSpecProvider
     */
    protected function getCiviApi4ServiceSpecProviderNavigationSpecProviderService()
    {
        return $this->services['Civi_Api4_Service_Spec_Provider_NavigationSpecProvider'] = new \Civi\Api4\Service\Spec\Provider\NavigationSpecProvider();
    }

    /**
     * Gets the public 'Civi_Api4_Service_Spec_Provider_NoteCreationSpecProvider' shared service.
     *
     * @return \Civi\Api4\Service\Spec\Provider\NoteCreationSpecProvider
     */
    protected function getCiviApi4ServiceSpecProviderNoteCreationSpecProviderService()
    {
        return $this->services['Civi_Api4_Service_Spec_Provider_NoteCreationSpecProvider'] = new \Civi\Api4\Service\Spec\Provider\NoteCreationSpecProvider();
    }

    /**
     * Gets the public 'Civi_Api4_Service_Spec_Provider_OptionValueCreationSpecProvider' shared service.
     *
     * @return \Civi\Api4\Service\Spec\Provider\OptionValueCreationSpecProvider
     */
    protected function getCiviApi4ServiceSpecProviderOptionValueCreationSpecProviderService()
    {
        return $this->services['Civi_Api4_Service_Spec_Provider_OptionValueCreationSpecProvider'] = new \Civi\Api4\Service\Spec\Provider\OptionValueCreationSpecProvider();
    }

    /**
     * Gets the public 'Civi_Api4_Service_Spec_Provider_PaymentProcessorCreationSpecProvider' shared service.
     *
     * @return \Civi\Api4\Service\Spec\Provider\PaymentProcessorCreationSpecProvider
     */
    protected function getCiviApi4ServiceSpecProviderPaymentProcessorCreationSpecProviderService()
    {
        return $this->services['Civi_Api4_Service_Spec_Provider_PaymentProcessorCreationSpecProvider'] = new \Civi\Api4\Service\Spec\Provider\PaymentProcessorCreationSpecProvider();
    }

    /**
     * Gets the public 'Civi_Api4_Service_Spec_Provider_PaymentProcessorTypeCreationSpecProvider' shared service.
     *
     * @return \Civi\Api4\Service\Spec\Provider\PaymentProcessorTypeCreationSpecProvider
     */
    protected function getCiviApi4ServiceSpecProviderPaymentProcessorTypeCreationSpecProviderService()
    {
        return $this->services['Civi_Api4_Service_Spec_Provider_PaymentProcessorTypeCreationSpecProvider'] = new \Civi\Api4\Service\Spec\Provider\PaymentProcessorTypeCreationSpecProvider();
    }

    /**
     * Gets the public 'Civi_Api4_Service_Spec_Provider_PhoneCreationSpecProvider' shared service.
     *
     * @return \Civi\Api4\Service\Spec\Provider\PhoneCreationSpecProvider
     */
    protected function getCiviApi4ServiceSpecProviderPhoneCreationSpecProviderService()
    {
        return $this->services['Civi_Api4_Service_Spec_Provider_PhoneCreationSpecProvider'] = new \Civi\Api4\Service\Spec\Provider\PhoneCreationSpecProvider();
    }

    /**
     * Gets the public 'Civi_Api4_Service_Spec_Provider_PriceFieldValueCreationSpecProvider' shared service.
     *
     * @return \Civi\Api4\Service\Spec\Provider\PriceFieldValueCreationSpecProvider
     */
    protected function getCiviApi4ServiceSpecProviderPriceFieldValueCreationSpecProviderService()
    {
        return $this->services['Civi_Api4_Service_Spec_Provider_PriceFieldValueCreationSpecProvider'] = new \Civi\Api4\Service\Spec\Provider\PriceFieldValueCreationSpecProvider();
    }

    /**
     * Gets the public 'Civi_Api4_Service_Spec_Provider_RelationshipTypeCreationSpecProvider' shared service.
     *
     * @return \Civi\Api4\Service\Spec\Provider\RelationshipTypeCreationSpecProvider
     */
    protected function getCiviApi4ServiceSpecProviderRelationshipTypeCreationSpecProviderService()
    {
        return $this->services['Civi_Api4_Service_Spec_Provider_RelationshipTypeCreationSpecProvider'] = new \Civi\Api4\Service\Spec\Provider\RelationshipTypeCreationSpecProvider();
    }

    /**
     * Gets the public 'Civi_Api4_Service_Spec_Provider_TagCreationSpecProvider' shared service.
     *
     * @return \Civi\Api4\Service\Spec\Provider\TagCreationSpecProvider
     */
    protected function getCiviApi4ServiceSpecProviderTagCreationSpecProviderService()
    {
        return $this->services['Civi_Api4_Service_Spec_Provider_TagCreationSpecProvider'] = new \Civi\Api4\Service\Spec\Provider\TagCreationSpecProvider();
    }

    /**
     * Gets the public 'Civi_Api4_Service_Spec_Provider_UFFieldCreationSpecProvider' shared service.
     *
     * @return \Civi\Api4\Service\Spec\Provider\UFFieldCreationSpecProvider
     */
    protected function getCiviApi4ServiceSpecProviderUFFieldCreationSpecProviderService()
    {
        return $this->services['Civi_Api4_Service_Spec_Provider_UFFieldCreationSpecProvider'] = new \Civi\Api4\Service\Spec\Provider\UFFieldCreationSpecProvider();
    }

    /**
     * Gets the public 'action_object_provider' shared service.
     *
     * @return \Civi\Api4\Provider\ActionObjectProvider
     */
    protected function getActionObjectProviderService()
    {
        return $this->services['action_object_provider'] = new \Civi\Api4\Provider\ActionObjectProvider();
    }

    /**
     * Gets the public 'angular' shared service.
     *
     * @return \Civi\Angular\Manager
     */
    protected function getAngularService()
    {
        return $this->services['angular'] = ($this->privates['civi_container_factory'] ?? ($this->privates['civi_container_factory'] = new \Civi\Core\Container()))->createAngularManager();
    }

    /**
     * Gets the public 'angularjs.loader' shared service.
     *
     * @return \Civi\Angular\AngularLoader
     */
    protected function getAngularjs_LoaderService()
    {
        return $this->services['angularjs.loader'] = new \Civi\Angular\AngularLoader();
    }

    /**
     * Gets the public 'asset_builder' shared service.
     *
     * @return \Civi\Core\AssetBuilder
     */
    protected function getAssetBuilderService()
    {
        return $this->services['asset_builder'] = new \Civi\Core\AssetBuilder();
    }

    /**
     * Gets the public 'bundle.bootstrap3' shared service.
     *
     * @return \CRM_Core_Resources_Bundle
     */
    protected function getBundle_Bootstrap3Service()
    {
        return $this->services['bundle.bootstrap3'] = \CRM_Core_Resources_Common::createBootstrap3Bundle('bootstrap3');
    }

    /**
     * Gets the public 'bundle.coreResources' shared service.
     *
     * @return \CRM_Core_Resources_Bundle
     */
    protected function getBundle_CoreResourcesService()
    {
        return $this->services['bundle.coreResources'] = \CRM_Core_Resources_Common::createFullBundle('coreResources');
    }

    /**
     * Gets the public 'bundle.coreStyles' shared service.
     *
     * @return \CRM_Core_Resources_Bundle
     */
    protected function getBundle_CoreStylesService()
    {
        return $this->services['bundle.coreStyles'] = \CRM_Core_Resources_Common::createStyleBundle('coreStyles');
    }

    /**
     * Gets the public 'cache.checks' shared service.
     *
     * @return \CRM_Utils_Cache_Interface
     */
    protected function getCache_ChecksService()
    {
        return $this->services['cache.checks'] = \CRM_Utils_Cache::create(['name' => 'checks', 'type' => [0 => '*memory*', 1 => 'SqlGroup', 2 => 'ArrayCache']]);
    }

    /**
     * Gets the public 'cache.community_messages' shared service.
     *
     * @return \CRM_Utils_Cache_Interface
     */
    protected function getCache_CommunityMessagesService()
    {
        return $this->services['cache.community_messages'] = \CRM_Utils_Cache::create(['name' => 'community_messages', 'type' => [0 => '*memory*', 1 => 'SqlGroup', 2 => 'ArrayCache']]);
    }

    /**
     * Gets the public 'cache.contactTypes' shared service.
     *
     * @return \CRM_Utils_Cache_Interface
     */
    protected function getCache_ContactTypesService()
    {
        return $this->services['cache.contactTypes'] = \CRM_Utils_Cache::create(['name' => 'contactTypes', 'type' => [0 => '*memory*', 1 => 'SqlGroup', 2 => 'ArrayCache'], 'withArray' => 'fast']);
    }

    /**
     * Gets the public 'cache.customData' shared service.
     *
     * @return \CRM_Utils_Cache_Interface
     */
    protected function getCache_CustomDataService()
    {
        return $this->services['cache.customData'] = \CRM_Utils_Cache::create(['name' => 'custom data', 'type' => [0 => '*memory*', 1 => 'SqlGroup', 2 => 'ArrayCache'], 'withArray' => 'fast']);
    }

    /**
     * Gets the public 'cache.default' shared service.
     *
     * @return \CRM_Utils_Cache
     */
    protected function getCache_DefaultService()
    {
        return $this->services['cache.default'] = \CRM_Utils_Cache::singleton();
    }

    /**
     * Gets the public 'cache.fields' shared service.
     *
     * @return \CRM_Utils_Cache_Interface
     */
    protected function getCache_FieldsService()
    {
        return $this->services['cache.fields'] = \CRM_Utils_Cache::create(['name' => 'contact fields', 'type' => [0 => '*memory*', 1 => 'SqlGroup', 2 => 'ArrayCache'], 'withArray' => 'fast']);
    }

    /**
     * Gets the public 'cache.groups' shared service.
     *
     * @return \CRM_Utils_Cache_Interface
     */
    protected function getCache_GroupsService()
    {
        return $this->services['cache.groups'] = \CRM_Utils_Cache::create(['name' => 'contact groups', 'type' => [0 => '*memory*', 1 => 'SqlGroup', 2 => 'ArrayCache'], 'withArray' => 'fast']);
    }

    /**
     * Gets the public 'cache.js_strings' shared service.
     *
     * @return \CRM_Utils_Cache_Interface
     */
    protected function getCache_JsStringsService()
    {
        return $this->services['cache.js_strings'] = \CRM_Utils_Cache::create(['name' => 'js_strings', 'type' => [0 => '*memory*', 1 => 'SqlGroup', 2 => 'ArrayCache']]);
    }

    /**
     * Gets the public 'cache.long' shared service.
     *
     * @return \CRM_Utils_Cache_Interface
     */
    protected function getCache_LongService()
    {
        return $this->services['cache.long'] = \CRM_Utils_Cache::create(['name' => 'long', 'type' => [0 => '*memory*', 1 => 'SqlGroup', 2 => 'ArrayCache']]);
    }

    /**
     * Gets the public 'cache.metadata' shared service.
     *
     * @return \CRM_Utils_Cache_Interface
     */
    protected function getCache_MetadataService()
    {
        return $this->services['cache.metadata'] = \CRM_Utils_Cache::create(['name' => 'metadata', 'type' => [0 => '*memory*', 1 => 'SqlGroup', 2 => 'ArrayCache'], 'withArray' => 'fast']);
    }

    /**
     * Gets the public 'cache.navigation' shared service.
     *
     * @return \CRM_Utils_Cache_Interface
     */
    protected function getCache_NavigationService()
    {
        return $this->services['cache.navigation'] = \CRM_Utils_Cache::create(['name' => 'navigation', 'type' => [0 => '*memory*', 1 => 'SqlGroup', 2 => 'ArrayCache'], 'withArray' => 'fast']);
    }

    /**
     * Gets the public 'cache.prevNextCache' shared service.
     *
     * @return \CRM_Utils_Cache_Interface
     */
    protected function getCache_PrevNextCacheService()
    {
        return $this->services['cache.prevNextCache'] = \CRM_Utils_Cache::create(['name' => 'CiviCRM Search PrevNextCache', 'type' => [0 => 'SqlGroup']]);
    }

    /**
     * Gets the public 'cache.session' shared service.
     *
     * @return \CRM_Utils_Cache_Interface
     */
    protected function getCache_SessionService()
    {
        return $this->services['cache.session'] = \CRM_Utils_Cache::create(['name' => 'CiviCRM Session', 'type' => [0 => '*memory*', 1 => 'SqlGroup', 2 => 'ArrayCache']]);
    }

    /**
     * Gets the public 'cache_config' shared service.
     *
     * @return \ArrayObject
     */
    protected function getCacheConfigService()
    {
        return $this->services['cache_config'] = ($this->privates['civi_container_factory'] ?? ($this->privates['civi_container_factory'] = new \Civi\Core\Container()))->createCacheConfig();
    }

    /**
     * Gets the public 'civi.activity.triggers' shared service.
     *
     * @return \Civi\Core\SqlTrigger\TimestampTriggers
     */
    protected function getCivi_Activity_TriggersService()
    {
        return $this->services['civi.activity.triggers'] = new \Civi\Core\SqlTrigger\TimestampTriggers('civicrm_activity', 'Activity');
    }

    /**
     * Gets the public 'civi.case.staticTriggers' shared service.
     *
     * @return \Civi\Core\SqlTrigger\StaticTriggers
     */
    protected function getCivi_Case_StaticTriggersService()
    {
        return $this->services['civi.case.staticTriggers'] = new \Civi\Core\SqlTrigger\StaticTriggers([0 => ['upgrade_check' => ['table' => 'civicrm_case', 'column' => 'modified_date'], 'table' => 'civicrm_case_activity', 'when' => 'AFTER', 'event' => [0 => 'INSERT'], 'sql' => ''."\n".'UPDATE civicrm_case SET modified_date = CURRENT_TIMESTAMP WHERE id = NEW.case_id;'."\n".''], 1 => ['upgrade_check' => ['table' => 'civicrm_case', 'column' => 'modified_date'], 'table' => 'civicrm_activity', 'when' => 'BEFORE', 'event' => [0 => 'UPDATE', 1 => 'DELETE'], 'sql' => ''."\n".'UPDATE civicrm_case SET modified_date = CURRENT_TIMESTAMP WHERE id IN (SELECT ca.case_id FROM civicrm_case_activity ca WHERE ca.activity_id = OLD.id);'."\n".'']]);
    }

    /**
     * Gets the public 'civi.case.triggers' shared service.
     *
     * @return \Civi\Core\SqlTrigger\TimestampTriggers
     */
    protected function getCivi_Case_TriggersService()
    {
        return $this->services['civi.case.triggers'] = new \Civi\Core\SqlTrigger\TimestampTriggers('civicrm_case', 'Case');
    }

    /**
     * Gets the public 'civi_api_kernel' shared service.
     *
     * @return \Civi\API\Kernel
     */
    protected function getCiviApiKernelService()
    {
        $this->services['civi_api_kernel'] = $instance = ($this->privates['civi_container_factory'] ?? ($this->privates['civi_container_factory'] = new \Civi\Core\Container()))->createApiKernel(($this->services['dispatcher'] ?? $this->getDispatcherService()), ($this->services['magic_function_provider'] ?? ($this->services['magic_function_provider'] = new \Civi\API\Provider\MagicFunctionProvider())));

        $instance->registerApiProvider(($this->services['action_object_provider'] ?? ($this->services['action_object_provider'] = new \Civi\Api4\Provider\ActionObjectProvider())));

        return $instance;
    }

    /**
     * Gets the public 'civi_token_compat' shared service.
     *
     * @return \Civi\Token\TokenCompatSubscriber
     */
    protected function getCiviTokenCompatService()
    {
        return $this->services['civi_token_compat'] = new \Civi\Token\TokenCompatSubscriber();
    }

    /**
     * Gets the public 'crm_activity_tokens' shared service.
     *
     * @return \CRM_Activity_Tokens
     */
    protected function getCrmActivityTokensService()
    {
        return $this->services['crm_activity_tokens'] = new \CRM_Activity_Tokens();
    }

    /**
     * Gets the public 'crm_contribute_tokens' shared service.
     *
     * @return \CRM_Contribute_Tokens
     */
    protected function getCrmContributeTokensService()
    {
        return $this->services['crm_contribute_tokens'] = new \CRM_Contribute_Tokens();
    }

    /**
     * Gets the public 'crm_event_tokens' shared service.
     *
     * @return \CRM_Event_Tokens
     */
    protected function getCrmEventTokensService()
    {
        return $this->services['crm_event_tokens'] = new \CRM_Event_Tokens();
    }

    /**
     * Gets the public 'crm_mailing_action_tokens' shared service.
     *
     * @return \CRM_Mailing_ActionTokens
     */
    protected function getCrmMailingActionTokensService()
    {
        return $this->services['crm_mailing_action_tokens'] = new \CRM_Mailing_ActionTokens();
    }

    /**
     * Gets the public 'crm_mailing_tokens' shared service.
     *
     * @return \CRM_Mailing_Tokens
     */
    protected function getCrmMailingTokensService()
    {
        return $this->services['crm_mailing_tokens'] = new \CRM_Mailing_Tokens();
    }

    /**
     * Gets the public 'crm_member_tokens' shared service.
     *
     * @return \CRM_Member_Tokens
     */
    protected function getCrmMemberTokensService()
    {
        return $this->services['crm_member_tokens'] = new \CRM_Member_Tokens();
    }

    /**
     * Gets the public 'crypto.jwt' shared service.
     *
     * @return \Civi\Crypto\CryptoJwt
     */
    protected function getCrypto_JwtService()
    {
        return $this->services['crypto.jwt'] = new \Civi\Crypto\CryptoJwt();
    }

    /**
     * Gets the public 'crypto.registry' shared service.
     *
     * @return \Civi\Crypto\CryptoService
     */
    protected function getCrypto_RegistryService()
    {
        return $this->services['crypto.registry'] = \Civi\Crypto\CryptoRegistry::createDefaultRegistry();
    }

    /**
     * Gets the public 'crypto.token' shared service.
     *
     * @return \Civi\Crypto\CryptoToken
     */
    protected function getCrypto_TokenService()
    {
        return $this->services['crypto.token'] = new \Civi\Crypto\CryptoToken();
    }

    /**
     * Gets the public 'cxn_reg_client' shared service.
     *
     * @return \Civi\Cxn\Rpc\RegistrationClient
     */
    protected function getCxnRegClientService()
    {
        return $this->services['cxn_reg_client'] = \CRM_Cxn_BAO_Cxn::createRegistrationClient();
    }

    /**
     * Gets the public 'dispatcher' shared service.
     *
     * @return \Civi\Core\CiviEventDispatcher
     */
    protected function getDispatcherService()
    {
        $this->services['dispatcher'] = $instance = ($this->privates['civi_container_factory'] ?? ($this->privates['civi_container_factory'] = new \Civi\Core\Container()))->createEventDispatcher();

        $instance->addListenerMap('CRM_Core_BAO_Translation', ['civi.api4.validate::Translation' => [0 => [0 => 'self_civi_api4_validate', 1 => 0]]]);
        $instance->addListenerMap('CRM_Core_BAO_RecurringEntity', ['civi.dao.postInsert' => [0 => [0 => 'triggerInsert']], 'civi.dao.postUpdate' => [0 => [0 => 'triggerUpdate']], 'civi.dao.postDelete' => [0 => [0 => 'triggerDelete']]]);
        $instance->addListenerMap('CRM_Contact_BAO_RelationshipCache', ['hook_civicrm_triggerInfo' => [0 => [0 => 'on_hook_civicrm_triggerInfo', 1 => 0]]]);
        $instance->addSubscriberServiceMap('action_object_provider', ['civi.api.resolve' => [0 => [0 => 'onApiResolve', 1 => 100]]]);
        $instance->addSubscriberServiceMap('Civi_Api4_Event_Subscriber_ContactPreSaveSubscriber', ['civi.api.prepare' => [0 => [0 => 'onApiPrepare']]]);
        $instance->addSubscriberServiceMap('Civi_Api4_Event_Subscriber_ContributionPreSaveSubscriber', ['civi.api.prepare' => [0 => [0 => 'onApiPrepare']]]);
        $instance->addSubscriberServiceMap('Civi_Api4_Event_Subscriber_CustomFieldPreSaveSubscriber', ['civi.api.prepare' => [0 => [0 => 'onApiPrepare']]]);
        $instance->addSubscriberServiceMap('Civi_Api4_Event_Subscriber_CustomGroupPreCreationSubscriber', ['civi.api.prepare' => [0 => [0 => 'onApiPrepare']]]);
        $instance->addSubscriberServiceMap('Civi_Api4_Event_Subscriber_IsCurrentSubscriber', ['civi.api.prepare' => [0 => [0 => 'onApiPrepare']]]);
        $instance->addSubscriberServiceMap('Civi_Api4_Event_Subscriber_OptionValuePreCreationSubscriber', ['civi.api.prepare' => [0 => [0 => 'onApiPrepare']]]);
        $instance->addSubscriberServiceMap('Civi_Api4_Event_Subscriber_PermissionCheckSubscriber', ['civi.api.authorize' => [0 => [0 => 'onApiAuthorize', 1 => -100]]]);
        $instance->addSubscriberServiceMap('Civi_Api4_Event_Subscriber_ValidateFieldsSubscriber', ['civi.api.prepare' => [0 => [0 => 'onApiPrepare']]]);
        $instance->addListener('civi.api4.authorizeRecord::Contribution', '_financialacls_civi_api4_authorizeContribution');
        $instance->addListener('hook_civicrm_triggerInfo', [0 => function () {
            return ($this->services['civi.activity.triggers'] ?? ($this->services['civi.activity.triggers'] = new \Civi\Core\SqlTrigger\TimestampTriggers('civicrm_activity', 'Activity')));
        }, 1 => 'onTriggerInfo'], 0);
        $instance->addListener('hook_civicrm_triggerInfo', [0 => function () {
            return ($this->services['civi.case.triggers'] ?? ($this->services['civi.case.triggers'] = new \Civi\Core\SqlTrigger\TimestampTriggers('civicrm_case', 'Case')));
        }, 1 => 'onTriggerInfo'], 0);
        $instance->addListener('hook_civicrm_triggerInfo', [0 => function () {
            return ($this->services['civi.case.staticTriggers'] ?? $this->getCivi_Case_StaticTriggersService());
        }, 1 => 'onTriggerInfo'], 0);
        $instance->addListener('civi.token.eval', [0 => function () {
            return ($this->services['civi_token_compat'] ?? ($this->services['civi_token_compat'] = new \Civi\Token\TokenCompatSubscriber()));
        }, 1 => 'onEvaluate'], 0);
        $instance->addListener('civi.token.render', [0 => function () {
            return ($this->services['civi_token_compat'] ?? ($this->services['civi_token_compat'] = new \Civi\Token\TokenCompatSubscriber()));
        }, 1 => 'onRender'], 0);
        $instance->addListener('civi.token.list', [0 => function () {
            return ($this->services['crm_mailing_action_tokens'] ?? ($this->services['crm_mailing_action_tokens'] = new \CRM_Mailing_ActionTokens()));
        }, 1 => 'registerTokens'], 0);
        $instance->addListener('civi.token.eval', [0 => function () {
            return ($this->services['crm_mailing_action_tokens'] ?? ($this->services['crm_mailing_action_tokens'] = new \CRM_Mailing_ActionTokens()));
        }, 1 => 'evaluateTokens'], 0);
        $instance->addListener('civi.actionSchedule.prepareMailingQuery', [0 => function () {
            return ($this->services['crm_mailing_action_tokens'] ?? ($this->services['crm_mailing_action_tokens'] = new \CRM_Mailing_ActionTokens()));
        }, 1 => 'alterActionScheduleQuery'], 0);
        $instance->addListener('civi.token.list', [0 => function () {
            return ($this->services['crm_activity_tokens'] ?? ($this->services['crm_activity_tokens'] = new \CRM_Activity_Tokens()));
        }, 1 => 'registerTokens'], 0);
        $instance->addListener('civi.token.eval', [0 => function () {
            return ($this->services['crm_activity_tokens'] ?? ($this->services['crm_activity_tokens'] = new \CRM_Activity_Tokens()));
        }, 1 => 'evaluateTokens'], 0);
        $instance->addListener('civi.actionSchedule.prepareMailingQuery', [0 => function () {
            return ($this->services['crm_activity_tokens'] ?? ($this->services['crm_activity_tokens'] = new \CRM_Activity_Tokens()));
        }, 1 => 'alterActionScheduleQuery'], 0);
        $instance->addListener('civi.token.list', [0 => function () {
            return ($this->services['crm_contribute_tokens'] ?? ($this->services['crm_contribute_tokens'] = new \CRM_Contribute_Tokens()));
        }, 1 => 'registerTokens'], 0);
        $instance->addListener('civi.token.eval', [0 => function () {
            return ($this->services['crm_contribute_tokens'] ?? ($this->services['crm_contribute_tokens'] = new \CRM_Contribute_Tokens()));
        }, 1 => 'evaluateTokens'], 0);
        $instance->addListener('civi.actionSchedule.prepareMailingQuery', [0 => function () {
            return ($this->services['crm_contribute_tokens'] ?? ($this->services['crm_contribute_tokens'] = new \CRM_Contribute_Tokens()));
        }, 1 => 'alterActionScheduleQuery'], 0);
        $instance->addListener('civi.token.list', [0 => function () {
            return ($this->services['crm_event_tokens'] ?? ($this->services['crm_event_tokens'] = new \CRM_Event_Tokens()));
        }, 1 => 'registerTokens'], 0);
        $instance->addListener('civi.token.eval', [0 => function () {
            return ($this->services['crm_event_tokens'] ?? ($this->services['crm_event_tokens'] = new \CRM_Event_Tokens()));
        }, 1 => 'evaluateTokens'], 0);
        $instance->addListener('civi.actionSchedule.prepareMailingQuery', [0 => function () {
            return ($this->services['crm_event_tokens'] ?? ($this->services['crm_event_tokens'] = new \CRM_Event_Tokens()));
        }, 1 => 'alterActionScheduleQuery'], 0);
        $instance->addListener('civi.token.list', [0 => function () {
            return ($this->services['crm_mailing_tokens'] ?? ($this->services['crm_mailing_tokens'] = new \CRM_Mailing_Tokens()));
        }, 1 => 'registerTokens'], 0);
        $instance->addListener('civi.token.eval', [0 => function () {
            return ($this->services['crm_mailing_tokens'] ?? ($this->services['crm_mailing_tokens'] = new \CRM_Mailing_Tokens()));
        }, 1 => 'evaluateTokens'], 0);
        $instance->addListener('civi.actionSchedule.prepareMailingQuery', [0 => function () {
            return ($this->services['crm_mailing_tokens'] ?? ($this->services['crm_mailing_tokens'] = new \CRM_Mailing_Tokens()));
        }, 1 => 'alterActionScheduleQuery'], 0);
        $instance->addListener('civi.token.list', [0 => function () {
            return ($this->services['crm_member_tokens'] ?? ($this->services['crm_member_tokens'] = new \CRM_Member_Tokens()));
        }, 1 => 'registerTokens'], 0);
        $instance->addListener('civi.token.eval', [0 => function () {
            return ($this->services['crm_member_tokens'] ?? ($this->services['crm_member_tokens'] = new \CRM_Member_Tokens()));
        }, 1 => 'evaluateTokens'], 0);
        $instance->addListener('civi.actionSchedule.prepareMailingQuery', [0 => function () {
            return ($this->services['crm_member_tokens'] ?? ($this->services['crm_member_tokens'] = new \CRM_Member_Tokens()));
        }, 1 => 'alterActionScheduleQuery'], 0);

        return $instance;
    }

    /**
     * Gets the public 'httpClient' shared service.
     *
     * @return \CRM_Utils_HttpClient
     */
    protected function getHttpClientService()
    {
        return $this->services['httpClient'] = \CRM_Utils_HttpClient::singleton();
    }

    /**
     * Gets the public 'i18n' shared service.
     *
     * @return \CRM_Core_I18n
     */
    protected function getI18nService()
    {
        return $this->services['i18n'] = \CRM_Core_I18n::singleton();
    }

    /**
     * Gets the public 'joiner' shared service.
     *
     * @return \Civi\Api4\Service\Schema\Joiner
     */
    protected function getJoinerService()
    {
        return $this->services['joiner'] = new \Civi\Api4\Service\Schema\Joiner(($this->services['schema_map'] ?? $this->getSchemaMapService()));
    }

    /**
     * Gets the public 'magic_function_provider' shared service.
     *
     * @return \Civi\API\Provider\MagicFunctionProvider
     */
    protected function getMagicFunctionProviderService()
    {
        return $this->services['magic_function_provider'] = new \Civi\API\Provider\MagicFunctionProvider();
    }

    /**
     * Gets the public 'pear_mail' shared service.
     *
     * @return \Mail
     */
    protected function getPearMailService()
    {
        return $this->services['pear_mail'] = \CRM_Utils_Mail::createMailer();
    }

    /**
     * Gets the public 'prevnext' shared service.
     *
     * @return \CRM_Core_PrevNextCache_Interface
     */
    protected function getPrevnextService()
    {
        return $this->services['prevnext'] = ($this->privates['civi_container_factory'] ?? ($this->privates['civi_container_factory'] = new \Civi\Core\Container()))->createPrevNextCache($this);
    }

    /**
     * Gets the public 'prevnext.driver.redis' shared service.
     *
     * @return \CRM_Core_PrevNextCache_Redis
     */
    protected function getPrevnext_Driver_RedisService()
    {
        return $this->services['prevnext.driver.redis'] = new \CRM_Core_PrevNextCache_Redis(($this->services['cache_config'] ?? $this->getCacheConfigService()));
    }

    /**
     * Gets the public 'prevnext.driver.sql' shared service.
     *
     * @return \CRM_Core_PrevNextCache_Sql
     */
    protected function getPrevnext_Driver_SqlService()
    {
        return $this->services['prevnext.driver.sql'] = new \CRM_Core_PrevNextCache_Sql();
    }

    /**
     * Gets the public 'psr_log' shared service.
     *
     * @return \CRM_Core_Error_Log
     */
    protected function getPsrLogService()
    {
        return $this->services['psr_log'] = new \CRM_Core_Error_Log();
    }

    /**
     * Gets the public 'psr_log_manager' shared service.
     *
     * @return \Civi\Core\LogManager
     */
    protected function getPsrLogManagerService()
    {
        return $this->services['psr_log_manager'] = new \Civi\Core\LogManager();
    }

    /**
     * Gets the public 'resources' shared service.
     *
     * @return \CRM_Core_Resources
     */
    protected function getResourcesService()
    {
        return $this->services['resources'] = ($this->privates['civi_container_factory'] ?? ($this->privates['civi_container_factory'] = new \Civi\Core\Container()))->createResources($this);
    }

    /**
     * Gets the public 'resources.js_strings' shared service.
     *
     * @return \CRM_Core_Resources_Strings
     */
    protected function getResources_JsStringsService()
    {
        return $this->services['resources.js_strings'] = new \CRM_Core_Resources_Strings(($this->services['cache.js_strings'] ?? $this->getCache_JsStringsService()));
    }

    /**
     * Gets the public 'schema_map' shared service.
     *
     * @return \Civi\Api4\Service\Schema\SchemaMap
     */
    protected function getSchemaMapService()
    {
        return $this->services['schema_map'] = (new \Civi\Api4\Service\Schema\SchemaMapBuilder(($this->services['dispatcher'] ?? $this->getDispatcherService())))->build();
    }

    /**
     * Gets the public 'spec_gatherer' shared service.
     *
     * @return \Civi\Api4\Service\Spec\SpecGatherer
     */
    protected function getSpecGathererService()
    {
        $this->services['spec_gatherer'] = $instance = new \Civi\Api4\Service\Spec\SpecGatherer();

        $instance->addSpecProvider(($this->services['Civi_Api4_Service_Spec_Provider_ACLCreationSpecProvider'] ?? ($this->services['Civi_Api4_Service_Spec_Provider_ACLCreationSpecProvider'] = new \Civi\Api4\Service\Spec\Provider\ACLCreationSpecProvider())));
        $instance->addSpecProvider(($this->services['Civi_Api4_Service_Spec_Provider_ACLEntityRoleCreationSpecProvider'] ?? ($this->services['Civi_Api4_Service_Spec_Provider_ACLEntityRoleCreationSpecProvider'] = new \Civi\Api4\Service\Spec\Provider\ACLEntityRoleCreationSpecProvider())));
        $instance->addSpecProvider(($this->services['Civi_Api4_Service_Spec_Provider_ActionScheduleCreationSpecProvider'] ?? ($this->services['Civi_Api4_Service_Spec_Provider_ActionScheduleCreationSpecProvider'] = new \Civi\Api4\Service\Spec\Provider\ActionScheduleCreationSpecProvider())));
        $instance->addSpecProvider(($this->services['Civi_Api4_Service_Spec_Provider_ActivitySpecProvider'] ?? ($this->services['Civi_Api4_Service_Spec_Provider_ActivitySpecProvider'] = new \Civi\Api4\Service\Spec\Provider\ActivitySpecProvider())));
        $instance->addSpecProvider(($this->services['Civi_Api4_Service_Spec_Provider_AddressCreationSpecProvider'] ?? ($this->services['Civi_Api4_Service_Spec_Provider_AddressCreationSpecProvider'] = new \Civi\Api4\Service\Spec\Provider\AddressCreationSpecProvider())));
        $instance->addSpecProvider(($this->services['Civi_Api4_Service_Spec_Provider_BatchCreationSpecProvider'] ?? ($this->services['Civi_Api4_Service_Spec_Provider_BatchCreationSpecProvider'] = new \Civi\Api4\Service\Spec\Provider\BatchCreationSpecProvider())));
        $instance->addSpecProvider(($this->services['Civi_Api4_Service_Spec_Provider_CampaignCreationSpecProvider'] ?? ($this->services['Civi_Api4_Service_Spec_Provider_CampaignCreationSpecProvider'] = new \Civi\Api4\Service\Spec\Provider\CampaignCreationSpecProvider())));
        $instance->addSpecProvider(($this->services['Civi_Api4_Service_Spec_Provider_CaseCreationSpecProvider'] ?? ($this->services['Civi_Api4_Service_Spec_Provider_CaseCreationSpecProvider'] = new \Civi\Api4\Service\Spec\Provider\CaseCreationSpecProvider())));
        $instance->addSpecProvider(($this->services['Civi_Api4_Service_Spec_Provider_CaseTypeGetSpecProvider'] ?? ($this->services['Civi_Api4_Service_Spec_Provider_CaseTypeGetSpecProvider'] = new \Civi\Api4\Service\Spec\Provider\CaseTypeGetSpecProvider())));
        $instance->addSpecProvider(($this->services['Civi_Api4_Service_Spec_Provider_ContactCreationSpecProvider'] ?? ($this->services['Civi_Api4_Service_Spec_Provider_ContactCreationSpecProvider'] = new \Civi\Api4\Service\Spec\Provider\ContactCreationSpecProvider())));
        $instance->addSpecProvider(($this->services['Civi_Api4_Service_Spec_Provider_ContactGetSpecProvider'] ?? ($this->services['Civi_Api4_Service_Spec_Provider_ContactGetSpecProvider'] = new \Civi\Api4\Service\Spec\Provider\ContactGetSpecProvider())));
        $instance->addSpecProvider(($this->services['Civi_Api4_Service_Spec_Provider_ContactTypeCreationSpecProvider'] ?? ($this->services['Civi_Api4_Service_Spec_Provider_ContactTypeCreationSpecProvider'] = new \Civi\Api4\Service\Spec\Provider\ContactTypeCreationSpecProvider())));
        $instance->addSpecProvider(($this->services['Civi_Api4_Service_Spec_Provider_ContributionCreationSpecProvider'] ?? ($this->services['Civi_Api4_Service_Spec_Provider_ContributionCreationSpecProvider'] = new \Civi\Api4\Service\Spec\Provider\ContributionCreationSpecProvider())));
        $instance->addSpecProvider(($this->services['Civi_Api4_Service_Spec_Provider_ContributionRecurCreationSpecProvider'] ?? ($this->services['Civi_Api4_Service_Spec_Provider_ContributionRecurCreationSpecProvider'] = new \Civi\Api4\Service\Spec\Provider\ContributionRecurCreationSpecProvider())));
        $instance->addSpecProvider(($this->services['Civi_Api4_Service_Spec_Provider_CustomFieldCreationSpecProvider'] ?? ($this->services['Civi_Api4_Service_Spec_Provider_CustomFieldCreationSpecProvider'] = new \Civi\Api4\Service\Spec\Provider\CustomFieldCreationSpecProvider())));
        $instance->addSpecProvider(($this->services['Civi_Api4_Service_Spec_Provider_CustomGroupCreationSpecProvider'] ?? ($this->services['Civi_Api4_Service_Spec_Provider_CustomGroupCreationSpecProvider'] = new \Civi\Api4\Service\Spec\Provider\CustomGroupCreationSpecProvider())));
        $instance->addSpecProvider(($this->services['Civi_Api4_Service_Spec_Provider_CustomValueSpecProvider'] ?? ($this->services['Civi_Api4_Service_Spec_Provider_CustomValueSpecProvider'] = new \Civi\Api4\Service\Spec\Provider\CustomValueSpecProvider())));
        $instance->addSpecProvider(($this->services['Civi_Api4_Service_Spec_Provider_DefaultLocationTypeProvider'] ?? ($this->services['Civi_Api4_Service_Spec_Provider_DefaultLocationTypeProvider'] = new \Civi\Api4\Service\Spec\Provider\DefaultLocationTypeProvider())));
        $instance->addSpecProvider(($this->services['Civi_Api4_Service_Spec_Provider_DomainCreationSpecProvider'] ?? ($this->services['Civi_Api4_Service_Spec_Provider_DomainCreationSpecProvider'] = new \Civi\Api4\Service\Spec\Provider\DomainCreationSpecProvider())));
        $instance->addSpecProvider(($this->services['Civi_Api4_Service_Spec_Provider_EmailCreationSpecProvider'] ?? ($this->services['Civi_Api4_Service_Spec_Provider_EmailCreationSpecProvider'] = new \Civi\Api4\Service\Spec\Provider\EmailCreationSpecProvider())));
        $instance->addSpecProvider(($this->services['Civi_Api4_Service_Spec_Provider_EntityTagCreationSpecProvider'] ?? ($this->services['Civi_Api4_Service_Spec_Provider_EntityTagCreationSpecProvider'] = new \Civi\Api4\Service\Spec\Provider\EntityTagCreationSpecProvider())));
        $instance->addSpecProvider(($this->services['Civi_Api4_Service_Spec_Provider_EntityTagFilterSpecProvider'] ?? ($this->services['Civi_Api4_Service_Spec_Provider_EntityTagFilterSpecProvider'] = new \Civi\Api4\Service\Spec\Provider\EntityTagFilterSpecProvider())));
        $instance->addSpecProvider(($this->services['Civi_Api4_Service_Spec_Provider_EventCreationSpecProvider'] ?? ($this->services['Civi_Api4_Service_Spec_Provider_EventCreationSpecProvider'] = new \Civi\Api4\Service\Spec\Provider\EventCreationSpecProvider())));
        $instance->addSpecProvider(($this->services['Civi_Api4_Service_Spec_Provider_FieldCurrencySpecProvider'] ?? ($this->services['Civi_Api4_Service_Spec_Provider_FieldCurrencySpecProvider'] = new \Civi\Api4\Service\Spec\Provider\FieldCurrencySpecProvider())));
        $instance->addSpecProvider(($this->services['Civi_Api4_Service_Spec_Provider_FieldDomainIdSpecProvider'] ?? ($this->services['Civi_Api4_Service_Spec_Provider_FieldDomainIdSpecProvider'] = new \Civi\Api4\Service\Spec\Provider\FieldDomainIdSpecProvider())));
        $instance->addSpecProvider(($this->services['Civi_Api4_Service_Spec_Provider_FinancialItemCreationSpecProvider'] ?? ($this->services['Civi_Api4_Service_Spec_Provider_FinancialItemCreationSpecProvider'] = new \Civi\Api4\Service\Spec\Provider\FinancialItemCreationSpecProvider())));
        $instance->addSpecProvider(($this->services['Civi_Api4_Service_Spec_Provider_GetActionDefaultsProvider'] ?? ($this->services['Civi_Api4_Service_Spec_Provider_GetActionDefaultsProvider'] = new \Civi\Api4\Service\Spec\Provider\GetActionDefaultsProvider())));
        $instance->addSpecProvider(($this->services['Civi_Api4_Service_Spec_Provider_GroupCreationSpecProvider'] ?? ($this->services['Civi_Api4_Service_Spec_Provider_GroupCreationSpecProvider'] = new \Civi\Api4\Service\Spec\Provider\GroupCreationSpecProvider())));
        $instance->addSpecProvider(($this->services['Civi_Api4_Service_Spec_Provider_IsCurrentFieldSpecProvider'] ?? ($this->services['Civi_Api4_Service_Spec_Provider_IsCurrentFieldSpecProvider'] = new \Civi\Api4\Service\Spec\Provider\IsCurrentFieldSpecProvider())));
        $instance->addSpecProvider(($this->services['Civi_Api4_Service_Spec_Provider_MappingCreationSpecProvider'] ?? ($this->services['Civi_Api4_Service_Spec_Provider_MappingCreationSpecProvider'] = new \Civi\Api4\Service\Spec\Provider\MappingCreationSpecProvider())));
        $instance->addSpecProvider(($this->services['Civi_Api4_Service_Spec_Provider_NavigationSpecProvider'] ?? ($this->services['Civi_Api4_Service_Spec_Provider_NavigationSpecProvider'] = new \Civi\Api4\Service\Spec\Provider\NavigationSpecProvider())));
        $instance->addSpecProvider(($this->services['Civi_Api4_Service_Spec_Provider_NoteCreationSpecProvider'] ?? ($this->services['Civi_Api4_Service_Spec_Provider_NoteCreationSpecProvider'] = new \Civi\Api4\Service\Spec\Provider\NoteCreationSpecProvider())));
        $instance->addSpecProvider(($this->services['Civi_Api4_Service_Spec_Provider_OptionValueCreationSpecProvider'] ?? ($this->services['Civi_Api4_Service_Spec_Provider_OptionValueCreationSpecProvider'] = new \Civi\Api4\Service\Spec\Provider\OptionValueCreationSpecProvider())));
        $instance->addSpecProvider(($this->services['Civi_Api4_Service_Spec_Provider_PaymentProcessorCreationSpecProvider'] ?? ($this->services['Civi_Api4_Service_Spec_Provider_PaymentProcessorCreationSpecProvider'] = new \Civi\Api4\Service\Spec\Provider\PaymentProcessorCreationSpecProvider())));
        $instance->addSpecProvider(($this->services['Civi_Api4_Service_Spec_Provider_PaymentProcessorTypeCreationSpecProvider'] ?? ($this->services['Civi_Api4_Service_Spec_Provider_PaymentProcessorTypeCreationSpecProvider'] = new \Civi\Api4\Service\Spec\Provider\PaymentProcessorTypeCreationSpecProvider())));
        $instance->addSpecProvider(($this->services['Civi_Api4_Service_Spec_Provider_PhoneCreationSpecProvider'] ?? ($this->services['Civi_Api4_Service_Spec_Provider_PhoneCreationSpecProvider'] = new \Civi\Api4\Service\Spec\Provider\PhoneCreationSpecProvider())));
        $instance->addSpecProvider(($this->services['Civi_Api4_Service_Spec_Provider_PriceFieldValueCreationSpecProvider'] ?? ($this->services['Civi_Api4_Service_Spec_Provider_PriceFieldValueCreationSpecProvider'] = new \Civi\Api4\Service\Spec\Provider\PriceFieldValueCreationSpecProvider())));
        $instance->addSpecProvider(($this->services['Civi_Api4_Service_Spec_Provider_RelationshipTypeCreationSpecProvider'] ?? ($this->services['Civi_Api4_Service_Spec_Provider_RelationshipTypeCreationSpecProvider'] = new \Civi\Api4\Service\Spec\Provider\RelationshipTypeCreationSpecProvider())));
        $instance->addSpecProvider(($this->services['Civi_Api4_Service_Spec_Provider_TagCreationSpecProvider'] ?? ($this->services['Civi_Api4_Service_Spec_Provider_TagCreationSpecProvider'] = new \Civi\Api4\Service\Spec\Provider\TagCreationSpecProvider())));
        $instance->addSpecProvider(($this->services['Civi_Api4_Service_Spec_Provider_UFFieldCreationSpecProvider'] ?? ($this->services['Civi_Api4_Service_Spec_Provider_UFFieldCreationSpecProvider'] = new \Civi\Api4\Service\Spec\Provider\UFFieldCreationSpecProvider())));

        return $instance;
    }

    /**
     * Gets the public 'sql_triggers' shared service.
     *
     * @return \Civi\Core\SqlTriggers
     */
    protected function getSqlTriggersService()
    {
        return $this->services['sql_triggers'] = new \Civi\Core\SqlTriggers();
    }

    /**
     * Gets the public 'themes' shared service.
     *
     * @return \Civi\Core\Themes
     */
    protected function getThemesService()
    {
        return $this->services['themes'] = new \Civi\Core\Themes();
    }

    /**
     * @return array|bool|float|int|string|null
     */
    public function getParameter($name)
    {
        $name = (string) $name;

        if (!(isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters))) {
            throw new InvalidArgumentException(sprintf('The parameter "%s" must be defined.', $name));
        }
        if (isset($this->loadedDynamicParameters[$name])) {
            return $this->loadedDynamicParameters[$name] ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
        }

        return $this->parameters[$name];
    }

    public function hasParameter($name): bool
    {
        $name = (string) $name;

        return isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters);
    }

    public function setParameter($name, $value): void
    {
        throw new LogicException('Impossible to call set() on a frozen ParameterBag.');
    }

    public function getParameterBag(): ParameterBagInterface
    {
        if (null === $this->parameterBag) {
            $parameters = $this->parameters;
            foreach ($this->loadedDynamicParameters as $name => $loaded) {
                $parameters[$name] = $loaded ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
            }
            $this->parameterBag = new FrozenParameterBag($parameters);
        }

        return $this->parameterBag;
    }

    private $loadedDynamicParameters = [];
    private $dynamicParameters = [];

    private function getDynamicParameter(string $name)
    {
        throw new InvalidArgumentException(sprintf('The dynamic parameter "%s" must be defined.', $name));
    }

    protected function getDefaultParameters(): array
    {
        return [
            'civicrm_base_path' => '/var/www/html/vendor/civicrm/civicrm-core',
        ];
    }
}
