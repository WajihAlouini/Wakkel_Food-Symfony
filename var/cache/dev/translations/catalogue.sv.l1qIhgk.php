<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('sv', array (
  'validators' => 
  array (
    'This value should be false.' => 'Värdet ska vara falskt.',
    'This value should be true.' => 'Värdet ska vara sant.',
    'This value should be of type {{ type }}.' => 'Värdet ska vara av typen {{ type }}.',
    'This value should be blank.' => 'Värdet ska vara tomt.',
    'The value you selected is not a valid choice.' => 'Värdet ska vara ett av de givna valen.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Du måste välja minst {{ limit }} val.|Du måste välja minst {{ limit }} val.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Du kan som mest välja {{ limit }} val.|Du kan som mest välja {{ limit }} val.',
    'One or more of the given values is invalid.' => 'Ett eller fler av de angivna värdena är ogiltigt.',
    'This field was not expected.' => 'Det här fältet förväntades inte.',
    'This field is missing.' => 'Det här fältet saknas.',
    'This value is not a valid date.' => 'Värdet är inte ett giltigt datum.',
    'This value is not a valid datetime.' => 'Värdet är inte ett giltigt datum med tid.',
    'This value is not a valid email address.' => 'Värdet är inte en giltig e-postadress.',
    'The file could not be found.' => 'Filen kunde inte hittas.',
    'The file is not readable.' => 'Filen är inte läsbar.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Filen är för stor ({{ size }} {{ suffix }}). Största tillåtna storlek är {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'Filens MIME-typ ({{ type }}) är ogiltig. De tillåtna typerna är {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Värdet ska vara {{ limit }} eller mindre.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Värdet är för långt. Det ska ha {{ limit }} tecken eller färre.|Värdet är för långt. Det ska ha {{ limit }} tecken eller färre.',
    'This value should be {{ limit }} or more.' => 'Värdet ska vara {{ limit }} eller mer.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Värdet är för kort. Det ska ha {{ limit }} tecken eller mer.|Värdet är för kort. Det ska ha {{ limit }} tecken eller mer.',
    'This value should not be blank.' => 'Värdet kan inte vara tomt.',
    'This value should not be null.' => 'Värdet kan inte vara null.',
    'This value should be null.' => 'Värdet ska vara null.',
    'This value is not valid.' => 'Värdet är inte giltigt.',
    'This value is not a valid time.' => 'Värdet är inte en giltig tid.',
    'This value is not a valid URL.' => 'Värdet är inte en giltig URL.',
    'The two values should be equal.' => 'De två värdena måste vara lika.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Filen är för stor. Tillåten maximal storlek är {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'Filen är för stor.',
    'The file could not be uploaded.' => 'Filen kunde inte laddas upp.',
    'This value should be a valid number.' => 'Värdet ska vara ett giltigt nummer.',
    'This file is not a valid image.' => 'Filen är ingen giltig bild.',
    'This is not a valid IP address.' => 'Värdet är inte en giltig IP-adress.',
    'This value is not a valid language.' => 'Värdet är inte ett giltigt språk.',
    'This value is not a valid locale.' => 'Värdet är inte en giltig plats.',
    'This value is not a valid country.' => 'Värdet är inte ett giltigt land.',
    'This value is already used.' => 'Värdet används redan.',
    'The size of the image could not be detected.' => 'Det gick inte att fastställa storleken på bilden.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'Bildens bredd är för stor ({{ width }}px). Tillåten maximal bredd är {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'Bildens bredd är för liten ({{ width }}px). Minsta förväntade bredd är {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'Bildens höjd är för stor ({{ height }}px). Tillåten maximal bredd är {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'Bildens höjd är för liten ({{ height }}px). Minsta förväntade höjd är {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'Värdet ska vara användarens nuvarande lösenord.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Värdet ska ha exakt {{ limit }} tecken.|Värdet ska ha exakt {{ limit }} tecken.',
    'The file was only partially uploaded.' => 'Filen laddades bara upp delvis.',
    'No file was uploaded.' => 'Ingen fil laddades upp.',
    'No temporary folder was configured in php.ini.' => 'Ingen tillfällig mapp konfigurerades i php.ini, eller den konfigurerade mappen finns inte.',
    'Cannot write temporary file to disk.' => 'Kan inte skriva temporär fil till disken.',
    'A PHP extension caused the upload to fail.' => 'En PHP extension gjorde att uppladdningen misslyckades.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Den här samlingen ska innehålla {{ limit }} element eller mer.|Den här samlingen ska innehålla {{ limit }} element eller mer.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Den här samlingen ska innehålla {{ limit }} element eller mindre.|Den här samlingen ska innehålla {{ limit }} element eller mindre.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Den här samlingen ska innehålla exakt {{ limit }} element.|Den här samlingen ska innehålla exakt {{ limit }} element.',
    'Invalid card number.' => 'Ogiltigt kortnummer.',
    'Unsupported card type or invalid card number.' => 'Okänd korttyp eller ogiltigt kortnummer.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Värdet är inte ett giltigt internationellt bankkontonummer (IBAN).',
    'This value is not a valid ISBN-10.' => 'Värdet är inte en giltig ISBN-10.',
    'This value is not a valid ISBN-13.' => 'Värdet är inte en giltig ISBN-13.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Värdet är varken en giltig ISBN-10 eller en giltig ISBN-13.',
    'This value is not a valid ISSN.' => 'Värdet är inte en giltig ISSN.',
    'This value is not a valid currency.' => 'Värdet är inte en giltig valuta.',
    'This value should be equal to {{ compared_value }}.' => 'Värdet ska vara detsamma som {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'Värdet ska vara större än {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Värdet ska bara större än eller detsamma som {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Värdet ska vara identiskt till {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Värdet ska vara mindre än {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Värdet ska vara mindre än eller detsamma som {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'Värdet ska inte vara detsamma som {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Värdet ska inte vara identiskt med {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'Förhållandet mellan bildens bredd och höjd är för stort ({{ ratio }}). Högsta tillåtna förhållande är {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'Förhållandet mellan bildens bredd och höjd är för litet ({{ ratio }}). Minsta tillåtna förhållande är {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'Bilden är kvadratisk ({{ width }}x{{ height }}px). Kvadratiska bilder tillåts inte.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'Bilden är landskapsorienterad ({{ width }}x{{ height }}px). Landskapsorienterade bilder tillåts inte.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'Bilden är porträttsorienterad ({{ width }}x{{ height }}px). Porträttsorienterade bilder tillåts inte.',
    'An empty file is not allowed.' => 'En tom fil är inte tillåten.',
    'The host could not be resolved.' => 'Värddatorn kunde inte hittas.',
    'This value does not match the expected {{ charset }} charset.' => 'Värdet har inte den förväntade teckenkodningen {{ charset }}.',
    'This is not a valid Business Identifier Code (BIC).' => 'Värdet är inte en giltig BIC-kod.',
    'Error' => 'Fel',
    'This is not a valid UUID.' => 'Värdet är inte en giltig UUID.',
    'This value should be a multiple of {{ compared_value }}.' => 'Värdet ska vara en multipel av {{ compared_value }}.',
    'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.' => 'Denna BIC-koden är inte associerad med IBAN {{ iban }}.',
    'This value should be valid JSON.' => 'Värdet ska vara giltig JSON.',
    'This collection should contain only unique elements.' => 'Denna samling bör endast innehålla unika element.',
    'This value should be positive.' => 'Värdet ska vara positivt.',
    'This value should be either positive or zero.' => 'Värdet ska vara antingen positivt eller noll.',
    'This value should be negative.' => 'Värdet ska vara negativt.',
    'This value should be either negative or zero.' => 'Värdet ska vara antingen negativt eller noll.',
    'This value is not a valid timezone.' => 'Värdet är inte en giltig tidszon.',
    'This password has been leaked in a data breach, it must not be used. Please use another password.' => 'Det här lösenordet har läckt ut vid ett dataintrång, det får inte användas. Använd ett annat lösenord.',
    'This value should be between {{ min }} and {{ max }}.' => 'Värdet bör ligga mellan {{ min }} och {{ max }}.',
    'This value is not a valid hostname.' => 'Värdet är inte ett giltigt servernamn.',
    'The number of elements in this collection should be a multiple of {{ compared_value }}.' => 'Antalet element i samlingen ska vara en multipel av {{ compared_value }}.',
    'This value should satisfy at least one of the following constraints:' => 'Värdet ska uppfylla minst ett av följande krav:',
    'Each element of this collection should satisfy its own set of constraints.' => 'Varje element i samlingen skall uppfylla sin egen uppsättning av krav.',
    'This value is not a valid International Securities Identification Number (ISIN).' => 'Värdet är inte ett giltigt "International Securities Identification Number" (ISIN).',
    'This value should be a valid expression.' => 'Värdet ska vara ett giltigt uttryck.',
    'This value is not a valid CSS color.' => 'Värdet är inte en giltig CSS-färg.',
    'This value is not a valid CIDR notation.' => 'Värdet är inte en giltig CIDR-notation.',
    'The value of the netmask should be between {{ min }} and {{ max }}.' => 'Värdet på nätmasken bör vara mellan {{ min }} och {{ max }}.',
    'The filename is too long. It should have {{ filename_max_length }} character or less.|The filename is too long. It should have {{ filename_max_length }} characters or less.' => 'Filnamnet är för långt. Det måste vara {{ filename_max_length }} tecken eller färre.|Filnamnet är för långt. Det måste vara {{ filename_max_length }} tecken eller färre.',
    'The password strength is too low. Please use a stronger password.' => 'Detta lösenord är för svagt. Använd ett starkare lösenord.',
    'This value contains characters that are not allowed by the current restriction-level.' => 'Värdet innehåller tecken som inte är tillåtna.',
    'Using invisible characters is not allowed.' => 'Användning av osynliga tecken är inte tillåtet.',
    'Mixing numbers from different scripts is not allowed.' => 'Blandning av siffror från olika skript är inte tillåtet.',
    'Using hidden overlay characters is not allowed.' => 'Användning av dolda överlagringstecken är inte tillåtet.',
    'The extension of the file is invalid ({{ extension }}). Allowed extensions are {{ extensions }}.' => 'Filtillägget är ogiltigt ({{ extension }}). Tillåtna filtillägg är {{ extensions }}.',
    'The detected character encoding is invalid ({{ detected }}). Allowed encodings are {{ encodings }}.' => 'Den upptäckta teckenkodningen är ogiltig ({{ detected }}). Tillåtna kodningar är {{ encodings }}.',
    'This value is not a valid MAC address.' => 'Värdet är inte en giltig MAC-adress.',
    'This URL is missing a top-level domain.' => 'Denna URL saknar en toppdomän.',
    'This form should not contain extra fields.' => 'Formuläret kan inte innehålla extra fält.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Den uppladdade filen var för stor. Försök ladda upp en mindre fil.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'CSRF-elementet är inte giltigt. Försök att skicka formuläret igen.',
    'This value is not a valid HTML5 color.' => 'Värdet är inte en giltig HTML5-färg.',
    'Please enter a valid birthdate.' => 'Ange ett giltigt födelsedatum.',
    'The selected choice is invalid.' => 'Det valda alternativet är ogiltigt.',
    'The collection is invalid.' => 'Den här samlingen är ogiltig.',
    'Please select a valid color.' => 'Välj en giltig färg.',
    'Please select a valid country.' => 'Välj ett land.',
    'Please select a valid currency.' => 'Välj en valuta.',
    'Please choose a valid date interval.' => 'Välj ett giltigt datumintervall.',
    'Please enter a valid date and time.' => 'Ange ett giltigt datum och tid.',
    'Please enter a valid date.' => 'Ange ett giltigt datum.',
    'Please select a valid file.' => 'Välj en fil.',
    'The hidden field is invalid.' => 'Det dolda fältet är ogiltigt.',
    'Please enter an integer.' => 'Ange ett heltal.',
    'Please select a valid language.' => 'Välj språk.',
    'Please select a valid locale.' => 'Välj plats.',
    'Please enter a valid money amount.' => 'Ange en giltig summa pengar.',
    'Please enter a number.' => 'Ange en siffra.',
    'The password is invalid.' => 'Lösenordet är ogiltigt.',
    'Please enter a percentage value.' => 'Ange ett procentuellt värde.',
    'The values do not match.' => 'De angivna värdena stämmer inte överens.',
    'Please enter a valid time.' => 'Ange en giltig tid.',
    'Please select a valid timezone.' => 'Välj en tidszon.',
    'Please enter a valid URL.' => 'Ange en giltig URL.',
    'Please enter a valid search term.' => 'Ange ett giltigt sökbegrepp.',
    'Please provide a valid phone number.' => 'Ange ett giltigt telefonnummer.',
    'The checkbox has an invalid value.' => 'Kryssrutan har ett ogiltigt värde.',
    'Please enter a valid email address.' => 'Ange en giltig e-postadress.',
    'Please select a valid option.' => 'Välj ett alternativ.',
    'Please select a valid range.' => 'Välj ett intervall.',
    'Please enter a valid week.' => 'Ange en giltig vecka.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Ett autentiseringsfel har inträffat.',
    'Authentication credentials could not be found.' => 'Uppgifterna för autentisering kunde inte hittas.',
    'Authentication request could not be processed due to a system problem.' => 'Autentiseringen kunde inte genomföras på grund av systemfel.',
    'Invalid credentials.' => 'Felaktiga uppgifter.',
    'Cookie has already been used by someone else.' => 'Cookien har redan använts av någon annan.',
    'Not privileged to request the resource.' => 'Saknar rättigheter för resursen.',
    'Invalid CSRF token.' => 'Ogiltig CSRF-token.',
    'No authentication provider found to support the authentication token.' => 'Ingen leverantör för autentisering hittades för angiven autentiseringstoken.',
    'No session available, it either timed out or cookies are not enabled.' => 'Ingen session finns tillgänglig, antingen har den förfallit eller är cookies inte aktiverat.',
    'No token could be found.' => 'Ingen token kunde hittas.',
    'Username could not be found.' => 'Användarnamnet kunde inte hittas.',
    'Account has expired.' => 'Kontot har förfallit.',
    'Credentials have expired.' => 'Uppgifterna har förfallit.',
    'Account is disabled.' => 'Kontot är inaktiverat.',
    'Account is locked.' => 'Kontot är låst.',
    'Too many failed login attempts, please try again later.' => 'För många misslyckade inloggningsförsök, försök igen senare.',
    'Invalid or expired login link.' => 'Ogiltig eller utgången inloggningslänk.',
    'Too many failed login attempts, please try again in %minutes% minute.' => 'För många misslyckade inloggningsförsök, försök igen om %minutes% minut.',
  ),
  'KnpPaginatorBundle' => 
  array (
    'label_previous' => 'Föregående',
    'label_next' => 'Nästa',
    'filter_searchword' => 'Sök...',
  ),
));

$catalogueEn = new MessageCatalogue('en', array (
  'validators' => 
  array (
    'This value should be false.' => 'This value should be false.',
    'This value should be true.' => 'This value should be true.',
    'This value should be of type {{ type }}.' => 'This value should be of type {{ type }}.',
    'This value should be blank.' => 'This value should be blank.',
    'The value you selected is not a valid choice.' => 'The value you selected is not a valid choice.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.',
    'One or more of the given values is invalid.' => 'One or more of the given values is invalid.',
    'This field was not expected.' => 'This field was not expected.',
    'This field is missing.' => 'This field is missing.',
    'This value is not a valid date.' => 'This value is not a valid date.',
    'This value is not a valid datetime.' => 'This value is not a valid datetime.',
    'This value is not a valid email address.' => 'This value is not a valid email address.',
    'The file could not be found.' => 'The file could not be found.',
    'The file is not readable.' => 'The file is not readable.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.',
    'This value should be {{ limit }} or less.' => 'This value should be {{ limit }} or less.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.',
    'This value should be {{ limit }} or more.' => 'This value should be {{ limit }} or more.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.',
    'This value should not be blank.' => 'This value should not be blank.',
    'This value should not be null.' => 'This value should not be null.',
    'This value should be null.' => 'This value should be null.',
    'This value is not valid.' => 'This value is not valid.',
    'This value is not a valid time.' => 'This value is not a valid time.',
    'This value is not a valid URL.' => 'This value is not a valid URL.',
    'The two values should be equal.' => 'The two values should be equal.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'The file is too large.',
    'The file could not be uploaded.' => 'The file could not be uploaded.',
    'This value should be a valid number.' => 'This value should be a valid number.',
    'This file is not a valid image.' => 'This file is not a valid image.',
    'This is not a valid IP address.' => 'This value is not a valid IP address.',
    'This value is not a valid language.' => 'This value is not a valid language.',
    'This value is not a valid locale.' => 'This value is not a valid locale.',
    'This value is not a valid country.' => 'This value is not a valid country.',
    'This value is already used.' => 'This value is already used.',
    'The size of the image could not be detected.' => 'The size of the image could not be detected.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'This value should be the user\'s current password.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.',
    'The file was only partially uploaded.' => 'The file was only partially uploaded.',
    'No file was uploaded.' => 'No file was uploaded.',
    'No temporary folder was configured in php.ini.' => 'No temporary folder was configured in php.ini, or the configured folder does not exist.',
    'Cannot write temporary file to disk.' => 'Cannot write temporary file to disk.',
    'A PHP extension caused the upload to fail.' => 'A PHP extension caused the upload to fail.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.',
    'Invalid card number.' => 'Invalid card number.',
    'Unsupported card type or invalid card number.' => 'Unsupported card type or invalid card number.',
    'This is not a valid International Bank Account Number (IBAN).' => 'This value is not a valid International Bank Account Number (IBAN).',
    'This value is not a valid ISBN-10.' => 'This value is not a valid ISBN-10.',
    'This value is not a valid ISBN-13.' => 'This value is not a valid ISBN-13.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'This value is neither a valid ISBN-10 nor a valid ISBN-13.',
    'This value is not a valid ISSN.' => 'This value is not a valid ISSN.',
    'This value is not a valid currency.' => 'This value is not a valid currency.',
    'This value should be equal to {{ compared_value }}.' => 'This value should be equal to {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'This value should be greater than {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'This value should be greater than or equal to {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'This value should be identical to {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'This value should be less than {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'This value should be less than or equal to {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'This value should not be equal to {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.',
    'An empty file is not allowed.' => 'An empty file is not allowed.',
    'The host could not be resolved.' => 'The host could not be resolved.',
    'This value does not match the expected {{ charset }} charset.' => 'This value does not match the expected {{ charset }} charset.',
    'This is not a valid Business Identifier Code (BIC).' => 'This value is not a valid Business Identifier Code (BIC).',
    'Error' => 'Error',
    'This is not a valid UUID.' => 'This value is not a valid UUID.',
    'This value should be a multiple of {{ compared_value }}.' => 'This value should be a multiple of {{ compared_value }}.',
    'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.' => 'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.',
    'This value should be valid JSON.' => 'This value should be valid JSON.',
    'This collection should contain only unique elements.' => 'This collection should contain only unique elements.',
    'This value should be positive.' => 'This value should be positive.',
    'This value should be either positive or zero.' => 'This value should be either positive or zero.',
    'This value should be negative.' => 'This value should be negative.',
    'This value should be either negative or zero.' => 'This value should be either negative or zero.',
    'This value is not a valid timezone.' => 'This value is not a valid timezone.',
    'This password has been leaked in a data breach, it must not be used. Please use another password.' => 'This password has been leaked in a data breach, it must not be used. Please use another password.',
    'This value should be between {{ min }} and {{ max }}.' => 'This value should be between {{ min }} and {{ max }}.',
    'This value is not a valid hostname.' => 'This value is not a valid hostname.',
    'The number of elements in this collection should be a multiple of {{ compared_value }}.' => 'The number of elements in this collection should be a multiple of {{ compared_value }}.',
    'This value should satisfy at least one of the following constraints:' => 'This value should satisfy at least one of the following constraints:',
    'Each element of this collection should satisfy its own set of constraints.' => 'Each element of this collection should satisfy its own set of constraints.',
    'This value is not a valid International Securities Identification Number (ISIN).' => 'This value is not a valid International Securities Identification Number (ISIN).',
    'This value should be a valid expression.' => 'This value should be a valid expression.',
    'This value is not a valid CSS color.' => 'This value is not a valid CSS color.',
    'This value is not a valid CIDR notation.' => 'This value is not a valid CIDR notation.',
    'The value of the netmask should be between {{ min }} and {{ max }}.' => 'The value of the netmask should be between {{ min }} and {{ max }}.',
    'The filename is too long. It should have {{ filename_max_length }} character or less.|The filename is too long. It should have {{ filename_max_length }} characters or less.' => 'The filename is too long. It should have {{ filename_max_length }} character or less.|The filename is too long. It should have {{ filename_max_length }} characters or less.',
    'The password strength is too low. Please use a stronger password.' => 'The password strength is too low. Please use a stronger password.',
    'This value contains characters that are not allowed by the current restriction-level.' => 'This value contains characters that are not allowed by the current restriction-level.',
    'Using invisible characters is not allowed.' => 'Using invisible characters is not allowed.',
    'Mixing numbers from different scripts is not allowed.' => 'Mixing numbers from different scripts is not allowed.',
    'Using hidden overlay characters is not allowed.' => 'Using hidden overlay characters is not allowed.',
    'The extension of the file is invalid ({{ extension }}). Allowed extensions are {{ extensions }}.' => 'The extension of the file is invalid ({{ extension }}). Allowed extensions are {{ extensions }}.',
    'The detected character encoding is invalid ({{ detected }}). Allowed encodings are {{ encodings }}.' => 'The detected character encoding is invalid ({{ detected }}). Allowed encodings are {{ encodings }}.',
    'This value is not a valid MAC address.' => 'This value is not a valid MAC address.',
    'This URL is missing a top-level domain.' => 'This URL is missing a top-level domain.',
    'This form should not contain extra fields.' => 'This form should not contain extra fields.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'The uploaded file was too large. Please try to upload a smaller file.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'The CSRF token is invalid. Please try to resubmit the form.',
    'This value is not a valid HTML5 color.' => 'This value is not a valid HTML5 color.',
    'Please enter a valid birthdate.' => 'Please enter a valid birthdate.',
    'The selected choice is invalid.' => 'The selected choice is invalid.',
    'The collection is invalid.' => 'The collection is invalid.',
    'Please select a valid color.' => 'Please select a valid color.',
    'Please select a valid country.' => 'Please select a valid country.',
    'Please select a valid currency.' => 'Please select a valid currency.',
    'Please choose a valid date interval.' => 'Please choose a valid date interval.',
    'Please enter a valid date and time.' => 'Please enter a valid date and time.',
    'Please enter a valid date.' => 'Please enter a valid date.',
    'Please select a valid file.' => 'Please select a valid file.',
    'The hidden field is invalid.' => 'The hidden field is invalid.',
    'Please enter an integer.' => 'Please enter an integer.',
    'Please select a valid language.' => 'Please select a valid language.',
    'Please select a valid locale.' => 'Please select a valid locale.',
    'Please enter a valid money amount.' => 'Please enter a valid money amount.',
    'Please enter a number.' => 'Please enter a number.',
    'The password is invalid.' => 'The password is invalid.',
    'Please enter a percentage value.' => 'Please enter a percentage value.',
    'The values do not match.' => 'The values do not match.',
    'Please enter a valid time.' => 'Please enter a valid time.',
    'Please select a valid timezone.' => 'Please select a valid timezone.',
    'Please enter a valid URL.' => 'Please enter a valid URL.',
    'Please enter a valid search term.' => 'Please enter a valid search term.',
    'Please provide a valid phone number.' => 'Please provide a valid phone number.',
    'The checkbox has an invalid value.' => 'The checkbox has an invalid value.',
    'Please enter a valid email address.' => 'Please enter a valid email address.',
    'Please select a valid option.' => 'Please select a valid option.',
    'Please select a valid range.' => 'Please select a valid range.',
    'Please enter a valid week.' => 'Please enter a valid week.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'An authentication exception occurred.',
    'Authentication credentials could not be found.' => 'Authentication credentials could not be found.',
    'Authentication request could not be processed due to a system problem.' => 'Authentication request could not be processed due to a system problem.',
    'Invalid credentials.' => 'Invalid credentials.',
    'Cookie has already been used by someone else.' => 'Cookie has already been used by someone else.',
    'Not privileged to request the resource.' => 'Not privileged to request the resource.',
    'Invalid CSRF token.' => 'Invalid CSRF token.',
    'No authentication provider found to support the authentication token.' => 'No authentication provider found to support the authentication token.',
    'No session available, it either timed out or cookies are not enabled.' => 'No session available, it either timed out or cookies are not enabled.',
    'No token could be found.' => 'No token could be found.',
    'Username could not be found.' => 'Username could not be found.',
    'Account has expired.' => 'Account has expired.',
    'Credentials have expired.' => 'Credentials have expired.',
    'Account is disabled.' => 'Account is disabled.',
    'Account is locked.' => 'Account is locked.',
    'Too many failed login attempts, please try again later.' => 'Too many failed login attempts, please try again later.',
    'Invalid or expired login link.' => 'Invalid or expired login link.',
    'Too many failed login attempts, please try again in %minutes% minute.' => 'Too many failed login attempts, please try again in %minutes% minute.',
  ),
  'victorprdh_recaptcha' => 
  array (
    'verify.captcha' => 'Please verify the captcha',
    'invalid.captcha' => 'Captcha invalid, please try again',
    'timeout.captcha' => 'The captcha is no longer valid, please try again',
    'missinginput.captcha' => 'Empty secrect key',
    'invalidinput.captcha' => 'Invalid secret key',
    'hostname.captcha' => 'Hostname mismatch',
    'badrequest.captcha' => 'The request could not be completed',
  ),
  'KnpPaginatorBundle' => 
  array (
    'label_previous' => 'Previous',
    'label_next' => 'Next',
    'filter_searchword' => 'Searchword...',
  ),
));
$catalogue->addFallbackCatalogue($catalogueEn);

return $catalogue;
