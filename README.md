# Whatsapp

## Create App 

- register in facebook (meta) developers https://developers.facebook.com/docs/development/register
- Create a Meta App: Go to developers.facebook.com > My Apps > Create App. Select the "Business" type and follow the prompts on your screen.
- From the App Dashboard, click on the app you would like to connect to WhatsApp. Scroll down to find the "WhatsApp" product and click Set up.
Next, you will see the option to select an existing Business Manager (if you have one) or, if you would like, the onboarding process can create one automatically for you (you can customize your business later, if needed).

Make a selection and click Continue. This will:

Associate your app with the Business Manager account that you selected earlier (or had created for you).
Generate a WhatsApp Business account.
Generate a test business phone number and associate it with your WhatsApp Business Account. You can use this number with the API to send an unlimited number of messages to up to 5 recipient phone numbers. Recipient phone numbers can be any valid number, but you must verify each one in the next step.
Redirect you to the WhatsApp > Getting Started (or Setup) panel in the App Dashboard.

In the WhatsApp > Getting Started (or Setup) panel:

Select your test phone number in the From field.
Enter the recipient phone number you would like to message in the To field. Ensure the number is correct, and that you want to add it to your list of 5 possible message recipients —as you add phone numbers, follow the prompts on the screen to verify you have access to them. Once this number has been added, it cannot be removed from your list. Note: This limitation is only for WhatsApp-provided test phone numbers. Real phone numbers that you register do not have a limit on the number of recipients.
Once you enter a recipient phone number, the code sample on the page will be updated to demonstrate an API call that sends a pre-approved message template to that number. Message templates are the only type of message that can be sent to customers who have yet to message you, or have not messaged you in the last 24 hours. Thus, message templates are primarily used to initiate conversations with customers. 

Finally, click Send message to send the first message. As an alternative, you can copy the code sample provided and execute it in your Terminal or in Postman. You have just sent a test message! 

## Installation
You can install the package via [Composer](https://getcomposer.org).

```bash
composer require maree/whatsapp
```
Publish your whatsapp config file with

```bash
php artisan vendor:publish --provider="Maree\Whatsapp\WhatsappServiceProvider" --tag="whatsapp"
```
then change your oto config from config/oto.php file
```php
    "access_token"   => "" ,
    "phone_number_id" => "",
```
## Usage

## Send simple text message

```php
use Maree\Whatsapp\Whatsapp;
    $response = Whatsapp::sendTextMessage('2010********' , 'hello maree'); 

```


## documentaion
- https://developers.facebook.com/docs/whatsapp/cloud-api/get-started
