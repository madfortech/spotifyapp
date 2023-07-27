migration file old name
class CreateDriveWithUsTable extends Migration
class CreateConnectYourCarWithUsTable extends Migration
class CreateSupportsTable extends Migration
class CreateUserProfilesTable extends Migration
class RemoveCitiesCountriesDriveWithUs extends Migration

models file old name
class Connect_Your_Car_With_Us extends Model
class Support extends Model
class userCity extends Model
class userCountry extends Model
class UserProfile extends Model
class userState extends Model

migration file name old
    2021_06_29_060420_create_drive_with_us_table
        // Schema::create('drive_with_us', function (Blueprint $table) {
        //     $table->id();
        //     $table->string('Firstname');
        //     $table->string('Lastname');
        //     $table->string('Phone')->unique();
        //     $table->string('email')->unique();
        //     $table->string('user_Country');
        //     $table->string('user_State');
        //     $table->string('user_City');
        //     $table->text('userDocument');
        //     $table->timestamps();
        // });
    2021_06_29_081339_create_connect__your__car__with__us_table
        // Schema::create('connect__your__car__with__us', function (Blueprint $table) {
        //     $table->id();
        //     $table->string('Firstname');
        //     $table->string('Lastname');
        //     $table->string('PhoneNumber')->unique();
        //     $table->string('email')->unique();
        //     $table->string('user_Document');
        //     $table->foreignId('city_id')->constrained();
        //     $table->timestamps();
        // });
    2021_06_30_053637_create_supports_table
    
        // Schema::create('supports', function (Blueprint $table) {
        //     $table->id();
        //     $table->string('title');
        //     $table->string('email')->unique();
        //     $table->string('phone_number')->unique();
        //     $table->string('Office_location');
        //     $table->string('Add_State');
        //     $table->string('Add_City');
        //     $table->string('Add_Country');
        //     $table->timestamps();
        // });
    2021_07_07_041508_create_user_profiles_table
        // Schema::create('user_profiles', function (Blueprint $table) {
        //     $table->id();
        //     $table->binary('userImage');
        //     $table->smallInteger('gender')->nullable();
        //     $table->string('mobileNo',10)->nullable();
        //     $table->string('flatNo');
        //     $table->string('areaCode');
        //     $table->string('city');
        //     $table->string('state');
        //     $table->string('country');
        //     $table->timestamps();
        //     $table->softDeletes();
        // });
    2021_07_07_055736_remove_cities_countries_drive_with_us
        // Schema::drop(('drive_with_us'), function (Blueprint $table) {
        //     $table->increments('id');
        //     $table->dropColumn('user_Country');
        //     $table->dropColumn('user_State');
        //     $table->dropColumn('user_City');
        // });
Livewire file old name
class DriveWithUs extends Component
class SupportPage extends Component
class UserSetting extends Component

resources file name
connect-your-car-with-us.blade
support-us.blade

livewire folder inside views file name
drive-with-us.blade
user-setting.blade
bootstrap folder 
support-page.blade
