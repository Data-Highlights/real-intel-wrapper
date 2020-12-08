## real-intel-wrapper
A wrapper library for integration with the Real Intel API

<b>Installation</b>

This library can be installed to your php project using composer

```
composer require real-intel/api-wrapper
```

In order to use this library you need to initialise it using your Real Intel credentials:

```
$wrapper = new RealIntelDelegate([
    'api_key' => 'Your-API-Key',
    'customer_id' => 'Your-Customer-ID',
    'sandbox' => true,
    'show_notes' => true
]);
```

Once initialised you can make calls to the class as follows:

```
$consumer = $wrapper->doConsumerTraceLite("Consumer-ID-Number", "Consumer-Last-Name", "Your-Unique-Reference");
```

There are multiple calls to be made, so the <a href="https://api.realintel.co.za/docs/realintel" target="_blank">Real Intel API Documentation</a> can be used for reference.

<b>NOTE: Not all API calls are available yet in this libary and will be added at a later stage. If you require a call, please contact us.</b>