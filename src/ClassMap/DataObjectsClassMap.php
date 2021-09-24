<?php
namespace dnj\phpvmomi\ClassMap;

use dnj\phpvmomi\DataObjects;

class DataObjectsClassMap
{
	const CLASS_MAP = [
		'AboutInfo' => DataObjects\AboutInfo::class,
		'ArrayUpdateSpec' => DataObjects\ArrayUpdateSpec::class,
		'CustomFieldDef' => DataObjects\CustomFieldDef::class,
		'CustomFieldValue' => DataObjects\CustomFieldValue::class,
		'Description' => DataObjects\Description::class,
		'DynamicData' => DataObjects\DynamicData::class,
		'Event' => DataObjects\Event::class,
		'HostCpuIdInfo' => DataObjects\HostCpuIdInfo::class,
		'HostConfigInfo' => DataObjects\HostConfigInfo::class,
		'HostListSummary' => DataObjects\HostListSummary::class,
		'HostListSummaryQuickStats' => DataObjects\HostListSummaryQuickStats::class,
		'HostNetworkInfo' => DataObjects\HostNetworkInfo::class,
		'HostPortGroup' => DataObjects\HostPortGroup::class,
		'HostPortGroupPort' => DataObjects\HostPortGroupPort::class,
		'HostPortGroupSpec' => DataObjects\HostPortGroupSpec::class,
		'KeyAnyValue' => DataObjects\KeyAnyValue::class,
		'LatencySensitivity' => DataObjects\LatencySensitivity::class,
		'LocalizableMessage' => DataObjects\LocalizableMessage::class,
		'LocalizedMethodFault' => DataObjects\LocalizedMethodFault::class,
		'ManagedObjectReference' => DataObjects\ManagedObjectReference::class,
		'OptionValue' => DataObjects\OptionValue::class,
		'PrivilegePolicyDef' => DataObjects\PrivilegePolicyDef::class,
		'PropertyFilterSpec' => DataObjects\PropertyFilterSpec::class,
		'ResourceAllocationInfo' => DataObjects\ResourceAllocationInfo::class,
		'ServiceContent' => DataObjects\ServiceContent::class,
		'SharesInfo' => DataObjects\SharesInfo::class,
		'StorageIOAllocationInfo' => DataObjects\StorageIOAllocationInfo::class,
		'ToolsConfigInfo' => DataObjects\ToolsConfigInfo::class,
		'ToolsConfigInfoToolsLastInstallInfo' => DataObjects\ToolsConfigInfoToolsLastInstallInfo::class,
		'UserSession' => DataObjects\UserSession::class,
		'VirtualAHCIController' => DataObjects\VirtualAHCIController::class,
		'VirtualCdrom' => DataObjects\VirtualCdrom::class,
		'VirtualCdromAtapiBackingInfo' => DataObjects\VirtualCdromAtapiBackingInfo::class,
		'VirtualCdromIsoBackingInfo' => DataObjects\VirtualCdromIsoBackingInfo::class,
		'VirtualController' => DataObjects\VirtualController::class,
		'VirtualDevice' => DataObjects\VirtualDevice::class,
		'VirtualDeviceBackingInfo' => DataObjects\VirtualDeviceBackingInfo::class,
		'VirtualDeviceConfigSpec' => DataObjects\VirtualDeviceConfigSpec::class,
		'VirtualEthernetCardNetworkBackingInfo' => DataObjects\VirtualEthernetCardNetworkBackingInfo::class,
		'VirtualDeviceConnectInfo' => DataObjects\VirtualDeviceConnectInfo::class,
		'VirtualDeviceDeviceBackingInfo' => DataObjects\VirtualDeviceDeviceBackingInfo::class,
		'VirtualDeviceFileBackingInfo' => DataObjects\VirtualDeviceFileBackingInfo::class,
		'VirtualDisk' => DataObjects\VirtualDisk::class,
		'VirtualDeviceBusSlotInfo' => DataObjects\VirtualDeviceBusSlotInfo::class,
		'VirtualDiskFlatVer2BackingInfo' => DataObjects\VirtualDiskFlatVer2BackingInfo::class,
		'VirtualE1000' => DataObjects\VirtualE1000::class,
		'VirtualEthernetCard' => DataObjects\VirtualEthernetCard::class,
		'VirtualEthernetCardResourceAllocation' => DataObjects\VirtualEthernetCardResourceAllocation::class,
		'VirtualFloppy' => DataObjects\VirtualFloppy::class,
		'VirtualIDEController' => DataObjects\VirtualIDEController::class,
		'VirtualSCSIController' => DataObjects\VirtualSCSIController::class,
		'VirtualLsiLogicSASController' => DataObjects\VirtualLsiLogicSASController::class,
		'VirtualLsiLogicController' => DataObjects\VirtualLsiLogicController::class,
		'VirtualMachineBootOptions' => DataObjects\VirtualMachineBootOptions::class,
		'VirtualMachineBootOptionsBootableDevice' => DataObjects\VirtualMachineBootOptionsBootableDevice::class,
		'VirtualMachineConfigSpec' => DataObjects\VirtualMachineConfigSpec::class,
		'VirtualMachineConsolePreferences' => DataObjects\VirtualMachineConsolePreferences::class,
		'VirtualMachineDefaultPowerOpInfo' => DataObjects\VirtualMachineDefaultPowerOpInfo::class,
		'VirtualMachineFileInfo' => DataObjects\VirtualMachineFileInfo::class,
		'VirtualMachineFlagInfo' => DataObjects\VirtualMachineFlagInfo::class,
		'VirtualMachineRuntimeInfo' => DataObjects\VirtualMachineRuntimeInfo::class,
		'VirtualMachineSummary' => DataObjects\VirtualMachineSummary::class,
		'VirtualMachineVideoCard' => DataObjects\VirtualMachineVideoCard::class,
		'VirtualPCIController' => DataObjects\VirtualPCIController::class,
		'VirtualPS2Controller' => DataObjects\VirtualPS2Controller::class,
		'VirtualSIOController' => DataObjects\VirtualSIOController::class,
		'VirtualUSBController' => DataObjects\VirtualUSBController::class,
		'VirtualVmxnet' => DataObjects\VirtualVmxnet::class,
		'VirtualVmxnet3' => DataObjects\VirtualVmxnet3::class,
		'VirtualMachineBootOptionsBootableCdromDevice' => DataObjects\VirtualMachineBootOptionsBootableCdromDevice::class,
		'VirtualMachineBootOptionsBootableDiskDevice' => DataObjects\VirtualMachineBootOptionsBootableDiskDevice::class,
		'VirtualMachineBootOptionsBootableEthernetDevice' => DataObjects\VirtualMachineBootOptionsBootableEthernetDevice::class,
		'VirtualMachineBootOptionsBootableFloppyDevice' => DataObjects\VirtualMachineBootOptionsBootableFloppyDevice::class,
	];
}
