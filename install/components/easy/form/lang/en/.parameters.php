<?
/**
 * Copyright (c) 2019 Created By/Edited By ASDAFF asdaff.asad@yandex.ru
 */

// DEFAULT_FIELDS
$MESS['EASY_FORM_FIELD_TITLE'] = 'Your name';
$MESS['EASY_FORM_FIELD_EMAIL'] = 'Your E-mail';
$MESS['EASY_FORM_FIELD_PHONE'] = 'Mobile phone';
$MESS['EASY_FORM_FIELD_MALE'] = 'Your sex';
$MESS['EASY_FORM_FIELD_MALE_VAL_1'] = 'Male';
$MESS['EASY_FORM_FIELD_MALE_VAL_2'] = 'Female';
$MESS['EASY_FORM_FIELD_BUDGET'] = 'Budget';
$MESS['EASY_FORM_FIELD_BUDGET_VAL_1'] = 'up to 50,000 rubles';
$MESS['EASY_FORM_FIELD_BUDGET_VAL_2'] = 'from 50,000 to 200,000 rubles';
$MESS['EASY_FORM_FIELD_SERVICES'] = 'Service';
$MESS['EASY_FORM_FIELD_SERVICES_VAL_1'] = 'Website development';
$MESS['EASY_FORM_FIELD_SERVICES_VAL_2'] = 'Site Support';
$MESS['EASY_FORM_FIELD_ACCEPT'] = 'Consent to processing data';
$MESS['EASY_FORM_FIELD_ACCEPT_VAL'] = 'I agree to process <a href="#" target="_blank"> personal data </a>';
$MESS['EASY_FORM_FIELD_MESSAGE'] = 'Message';
$MESS['EASY_FORM_FIELD_DOCS'] = 'Document';
$MESS['EASY_FORM_FIELD_HIDDEN'] = 'Hidden Field';

// VISUAL
$MESS['EASY_FORM_UNIQUE_FORM_ID'] = 'Form ID';
$MESS['EASY_FORM_FORM_NAME'] = 'Form name';
$MESS['EASY_FORM_FORM_NAME_DEFAULT'] = 'Feedback Form';
$MESS['EASY_FORM_WIDTH_FORM'] = 'Width of the form';
$MESS['EASY_FORM_DISPLAY_FIELDS'] = 'Fields';
$MESS['EASY_FORM_REQUIRED_FIELDS'] = 'Required fields';
$MESS['EASY_FORM_FIELDS_ORDER'] = 'Location of form fields';
$MESS['EASY_FORM_HIDE_FIELD_NAME'] = 'Hide form field names';
$MESS['EASY_FORM_HIDE_ASTERISK'] = 'Remove colons and asterisks';
$MESS['EASY_FORM_FORM_AUTOCOMPLETE'] = 'AutoComplete form field values';
$MESS['EASY_FORM_FORM_SUBMIT_VALUE'] = 'Button Name';
$MESS['EASY_FORM_FORM_SUBMIT_VALUE_DEFAULT'] = 'Send';

// SUBMIT
$MESS['EASY_FORM_GROUP_SUBMIT'] = 'Send form';
$MESS['EASY_FORM_SEND_AJAX'] = 'Send form using AJAX?';
$MESS['EASY_FORM_SHOW_MODAL'] = 'Show result in modal window';
$MESS['EASY_FORM_FUNCTION_CALLBACKS_SUCCESS'] = 'Function name on successful sending ("_callbacks")';
$MESS['EASY_FORM_OK_MESSAGE'] = 'The message about the successful sending';
$MESS['EASY_FORM_OK_TEXT'] = 'Your message has been sent. We will contact you within 2 hours';
$MESS['EASY_FORM_ERROR_MESSAGE'] = 'Error message';
$MESS['EASY_FORM_ERROR_TEXT'] = 'An error occurred. Message not sent.';
$MESS['EASY_FORM_TITLE_SHOW_MODAL'] = 'Window title';
$MESS['EASY_FORM_DEFAULT_TITLE_SHOW_MODAL'] = 'Thank you!';

// MAIL
$MESS['EASY_FORM_GROUP_MAIL'] = 'Sending settings for messages';
$MESS['EASY_FORM_ENABLE_SEND_MAIL'] = 'Enable sending emails';
$MESS['EASY_FORM_CREATE_SEND_MAIL'] = 'Create a new mail template';
$MESS['EASY_FORM_EMAIL_TEMPLATES'] = 'Letter template';
$MESS['EASY_FORM_REPLACE_FIELD_FROM'] = "Replace the letter \"From\" with the visitor's e-mail address";
$MESS['EASY_FORM_EMAIL_FROM'] = '# EMAIL_FROM #';
$MESS['EASY_FORM_EVEN_EMAIL_TO'] = '# EMAIL_TO #';
$MESS['EASY_FORM_BCC'] = '# EMAIL_BCC #';
$MESS['EASY_FORM_MAIL_SUBJECT_ADMIN'] = 'The subject of the message for the administrator';
$MESS['EASY_FORM_MAIL_SUBJECT_ADMIN_DEFAULT'] = '# SITE_NAME #: Message from feedback form';
$MESS['EASY_FORM_WRITE_MESS_FILDES_TABLE'] = 'Record fields in the mail template with a table';
$MESS['EASY_FORM_EMAIL_TO'] = 'E-mail to which the message will be sent (by default it is used from module settings)';
$MESS['EASY_FORM_BCC'] = 'Bcc';
$MESS['EASY_FORM_EVEN_BCC'] = '# BCC #';
$MESS['EASY_FORM_RU_NAME'] = 'Sending a message via the Easy Form super-form';
$MESS['EASY_FORM_RU_DESCRIPTION'] = '=== Service Macros ===
# AUTHOR_NAME # - Author of the message
# SUBJECT # - Subject of the letter
# FORM_NAME # - Form name
# FORM_FIELDS # - The contents of all fields in tabular or line form (depending on the settings of the form component)
# EMAIL_FROM # - Email of the sender of the message (E-mail by default, or value of the form field "E-mail", depending on the settings)
# EMAIL_TO # - Email of the message recipient (it is set in the settings of the comonent)
# EMAIL_BCC # - Email a hidden copy (it is set in the settings of the comonent)

=== The default form field macros ===
# TITLE # - Your Name
# WORK_POSITION # - Position
# WORK_COMPANY # - Company
# EMAIL # - E-mail
# PHONE # - Mobile phone
# ADDRESS # - Address
# SERVICES # - Service
# MESSAGE # - Message

=== Any form fields ===
The value of the character code of any field, for example:
# EMAIL #

=== System macros ===
';
$MESS['EASY_FORM_SUBJECT'] = '# SUBJECT #';
$MESS['EASY_FORM_MESSAGE'] = 'Information message of the site # SITE_NAME # <br>
------------------------------------------ <br>
The <br>
You have been sent a message using form # FORM_NAME # <br>
The <br>
Message text: <br>
# FORM_FIELDS # <br>
The <br>
The message is generated automatically.
';
// IBLOCK
$MESS['EASY_FORM_GROUP_WRITE_IB'] = 'Record results in the information block';
$MESS['EASY_FORM_USE_IBLOCK_WRITE'] = 'Write results to IS';
$MESS['EASY_FORM_IBLOCK_PROP_ADD_NAME'] = 'Create a new IB';
$MESS["EASY_FORM_IBLOCK_DESC_LIST_TYPE"] = "Information block type (only used for verification)";
$MESS["EASY_FORM_IBLOCK_DESC_LIST_ID"] = "Information block code for storing the result";
$MESS['EASY_FORM_ACTIVE_ELEMENT'] = "Deactivate an element when adding?";
$MESS['EASY_FORM_CATEGORY_IBLOCK_FIELD'] = "Property of the information block to which data will be written";
$MESS['EASY_FORM_IBLOCK_FIELD_NO_WRITE'] = "Do not write";
$MESS['EASY_FORM_IBLOCK_FIELD_NAME'] = "Name";
$MESS['EASY_FORM_IBLOCK_FIELD_DETAIL_TEXT'] = "Detailed Description";
$MESS['EASY_FORM_IBLOCK_FIELD_PREVIEW_TEXT'] = "Description for announcement";
$MESS['EASY_FORM_IBLOCK_FIELD_FORM'] = "Create automatically";
$MESS['EASY_FORM_IBLOCK_LANG_RU_NAME'] = "Form Results";
$MESS['EASY_FORM_IBLOCK_LANG_EN_NAME'] = "Form result";
$MESS['EASY_FORM_IBLOCK_PROP_RU_NAME'] = "Create a new IB?";

// CAPTCHA
$MESS['EASY_FORM_CAPTCHA'] = 'Captcha';
$MESS['EASY_FORM_USE_CAPTCHA'] = 'Use captcha reCAPTCHA';
$MESS['EASY_FORM_USE_CAPTCHA_TIP'] = 'Smart CAPTCHA by Google';
$MESS['EASY_FORM_CAPTCHA_BUTTON_NAME'] = 'Customize captcha';
$MESS['EASY_FORM_CAPTCHA_KEY'] = 'ReCAPTCHA key';
$MESS['EASY_FORM_CAPTCHA_KEY_TIP'] = 'You can get the key at https://www.google.com/recaptcha/admin';
$MESS['EASY_FORM_CAPTCHA_SECRET_KEY'] = 'ReCAPTCHA secret key';
$MESS['EASY_FORM_CAPTCHA_SECRET_KEY_TIP'] = 'You can get the private key at https://www.google.com/recaptcha/admin';
$MESS['EASY_FORM_FIELD_CAPTCHA_TITLE'] = 'Title';

// SUBMIT WARNING
$MESS['EASY_FORM_GROUP_PERSONAL_DATA'] = 'Processing of personal data';
$MESS['EASY_FORM_USE_MODULE_VARNING'] = 'Use message from module settings';
$MESS['EASY_FORM_FORM_SUBMIT_VARNING'] = 'The message displayed before the button';
$MESS['EASY_FORM_FORM_SUBMIT_VARNING_TIP'] = "You can use the template #BUTTON# instead of the button name";
$MESS['EASY_FORM_FORM_SUBMIT_VARNING_DEFAULT'] = 'By clicking on the "#BUTTON#" button, you consent to the processing of <a target="_blank" href="#"> personal data </a>';

//GROUP_JS_VALIDATE_SETTINGS
$MESS['EASY_FORM_GROUPS_JS_VALIDATE_SETTINGS'] = "JS Bootstrap Validators";
$MESS['EASY_FORM_USE_FORMVALIDATION_JS'] = 'Scan fields via JS Bootstrap Validators';
$MESS['EASY_FORM_HIDE_FORMVALIDATION_TEXT'] = 'Hide error messages';
$MESS['EASY_FORM_INCLUDE_FORMVALIDATION_LIBS'] = 'Include JS Bootstrap Validators';


// GROUP_JS_VALIDATE_SETTINGS
$MESS['EASY_FORM_GROUPS_JS_LIB_SETTINGS'] = "JS plug-ins";
$MESS['EASY_FORM_INCLUDE_JQUERY'] = 'Connect jQuery-1.12.4';
$MESS['EASY_FORM_USE_BOOTSRAP_CSS'] = 'Connect Standard Bootstrap Styles 3';
$MESS['EASY_FORM_USE_BOOTSRAP_JS'] = 'Connect standard JS Bootstrap 3';
$MESS['EASY_FORM_USE_DROPZONE_JS'] = 'Connect boot loader DragnDrop';
$MESS['EASY_FORM_USE_BOOTSRAP_JS_TIP'] = 'Required for the modal window';
$MESS['EASY_FORM_USE_INPUTMASK_JS'] = 'Connect JS Inputmask';
$MESS['EASY_FORM_USE_INPUTMASK'] = 'Enable mask';

// GROUP FIELDS
$MESS['EASY_FORM_GROUP_FIELD_TITLE'] = '- field settings';
$MESS['EASY_FORM_GROUP_FIELD_NAME'] = 'Name';
$MESS['EASY_FORM_TYPE_FIELD'] = 'Field Type';
$MESS['EASY_FORM_TYPE_FIELD_ACCEPT'] = '(Consent)';
$MESS['EASY_FORM_GROUP_FIELD_REQ'] = 'Additional validation rules';
$MESS['EASY_FORM_GROUP_FIELD_VALUE'] = 'Value';
$MESS['EASY_FORM_GROUP_FIELD_SELECT_ADD'] = 'Additional value (entered manually)';
$MESS['EASY_FORM_GROUP_FIELD_SELECT_ADD_DEF'] = 'Other (write your own)';
$MESS['EASY_FORM_GROUP_FIELD_FILE_EXTENSION'] = 'Valid file extensions (separated by commas)';
$MESS['EASY_FORM_GROUP_FIELD_FILE_MAX_SIZE'] = 'Maximum file size (in Kb)';
$MESS['EASY_FORM_GROUP_FIELD_INPUTMASK_TEMP'] = 'Mask template';
$MESS['EASY_FORM_GROUP_FIELD_VIEW'] = 'Horizontal display of values';

// VALIDATION_MESSAGES
$MESS['EASY_FORM_FIELD_VALIDATION_MESSAGE'] = 'Text on error';
$MESS['EASY_FORM_FIELD_VALIDATION_ADDITIONALLY_MESSAGE'] = 'Additional validation parameters';
$MESS['EASY_FORM_FIELD_VALIDATION_MESSAGE_DEFAULT'] = 'Required field';
$MESS['EASY_FORM_FIELD_VALIDATION_MESSAGE_EMAIL_DEFAULT'] = 'E-mail entered incorrectly';
?>
