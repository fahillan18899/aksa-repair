    <?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    return new class extends Migration
    {
        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up()
        {
            Schema::create('sphygmomanometers', function (Blueprint $table) {
                $table->increments('id');
                $table->string('pengukuran_50_1', 10)->nullable();
                $table->string('pengukuran_50_2', 10)->nullable();
                $table->string('pengukuran_50_3', 10)->nullable();
                $table->string('pengukuran_50_4', 10)->nullable();
                $table->string('pengukuran_50_5', 10)->nullable();
                $table->string('pengukuran_50_6', 10)->nullable();
                $table->string('pengukuran_100_1', 10)->nullable();
                $table->string('pengukuran_100_2', 10)->nullable();
                $table->string('pengukuran_100_3', 10)->nullable();
                $table->string('pengukuran_100_4', 10)->nullable();
                $table->string('pengukuran_100_5', 10)->nullable();
                $table->string('pengukuran_100_6', 10)->nullable();
                $table->string('pengukuran_150_1', 10)->nullable();
                $table->string('pengukuran_150_2', 10)->nullable();
                $table->string('pengukuran_150_3', 10)->nullable();
                $table->string('pengukuran_150_4', 10)->nullable();
                $table->string('pengukuran_150_5', 10)->nullable();
                $table->string('pengukuran_150_6', 10)->nullable();
                $table->string('pengukuran_200_1', 10)->nullable();
                $table->string('pengukuran_200_2', 10)->nullable();
                $table->string('pengukuran_200_3', 10)->nullable();
                $table->string('pengukuran_200_4', 10)->nullable();
                $table->string('pengukuran_200_5', 10)->nullable();
                $table->string('pengukuran_200_6', 10)->nullable();
                $table->string('pengukuran_250_1', 10)->nullable();
                $table->string('pengukuran_250_2', 10)->nullable();
                $table->string('pengukuran_250_3', 10)->nullable();
                $table->string('pengukuran_250_4', 10)->nullable();
                $table->string('pengukuran_250_5', 10)->nullable();
                $table->string('pengukuran_250_6', 10)->nullable();
                $table->string('pengukuran_260_1', 10)->nullable();
                $table->string('pengukuran_260_2', 10)->nullable();
                $table->string('pengukuran_260_3', 10)->nullable();
                $table->string('pengukuran_260_4', 10)->nullable();
                $table->string('pengukuran_260_5', 10)->nullable();
                $table->string('pengukuran_260_6', 10)->nullable();
                $table->string('pengukuran_naik_0_1', 10)->nullable();
                $table->string('pengukuran_naik_0_2', 10)->nullable();
                $table->string('pengukuran_naik_0_3', 10)->nullable();
                $table->string('pengukuran_naik_0_4', 10)->nullable();
                $table->string('pengukuran_naik_0_5', 10)->nullable();
                $table->string('pengukuran_naik_0_6', 10)->nullable();
                $table->string('pengukuran_naik_50_1', 10)->nullable();
                $table->string('pengukuran_naik_50_2', 10)->nullable();
                $table->string('pengukuran_naik_50_3', 10)->nullable();
                $table->string('pengukuran_naik_50_4', 10)->nullable();
                $table->string('pengukuran_naik_50_5', 10)->nullable();
                $table->string('pengukuran_naik_50_6', 10)->nullable();
                $table->string('pengukuran_naik_100_1', 10)->nullable();
                $table->string('pengukuran_naik_100_2', 10)->nullable();
                $table->string('pengukuran_naik_100_3', 10)->nullable();
                $table->string('pengukuran_naik_100_4', 10)->nullable();
                $table->string('pengukuran_naik_100_5', 10)->nullable();
                $table->string('pengukuran_naik_100_6', 10)->nullable();
                $table->string('pengukuran_naik_150_1', 10)->nullable();
                $table->string('pengukuran_naik_150_2', 10)->nullable();
                $table->string('pengukuran_naik_150_3', 10)->nullable();
                $table->string('pengukuran_naik_150_4', 10)->nullable();
                $table->string('pengukuran_naik_150_5', 10)->nullable();
                $table->string('pengukuran_naik_150_6', 10)->nullable();
                $table->string('pengukuran_naik_200_1', 10)->nullable();
                $table->string('pengukuran_naik_200_2', 10)->nullable();
                $table->string('pengukuran_naik_200_3', 10)->nullable();
                $table->string('pengukuran_naik_200_4', 10)->nullable();
                $table->string('pengukuran_naik_200_5', 10)->nullable();
                $table->string('pengukuran_naik_200_6', 10)->nullable();
                $table->string('pengukuran_naik_250_1', 10)->nullable();
                $table->string('pengukuran_naik_250_2', 10)->nullable();
                $table->string('pengukuran_naik_250_3', 10)->nullable();
                $table->string('pengukuran_naik_250_4', 10)->nullable();
                $table->string('pengukuran_naik_250_5', 10)->nullable();
                $table->string('pengukuran_naik_250_6', 10)->nullable();
                $table->string('pengukuran_turun_0_1', 10)->nullable();
                $table->string('pengukuran_turun_0_2', 10)->nullable();
                $table->string('pengukuran_turun_0_3', 10)->nullable();
                $table->string('pengukuran_turun_0_4', 10)->nullable();
                $table->string('pengukuran_turun_0_5', 10)->nullable();
                $table->string('pengukuran_turun_0_6', 10)->nullable();
                $table->string('pengukuran_turun_50_1', 10)->nullable();
                $table->string('pengukuran_turun_50_2', 10)->nullable();
                $table->string('pengukuran_turun_50_3', 10)->nullable();
                $table->string('pengukuran_turun_50_4', 10)->nullable();
                $table->string('pengukuran_turun_50_5', 10)->nullable();
                $table->string('pengukuran_turun_50_6', 10)->nullable();
                $table->string('pengukuran_turun_100_1', 10)->nullable();
                $table->string('pengukuran_turun_100_2', 10)->nullable();
                $table->string('pengukuran_turun_100_3', 10)->nullable();
                $table->string('pengukuran_turun_100_4', 10)->nullable();
                $table->string('pengukuran_turun_100_5', 10)->nullable();
                $table->string('pengukuran_turun_100_6', 10)->nullable();
                $table->string('pengukuran_turun_150_1', 10)->nullable();
                $table->string('pengukuran_turun_150_2', 10)->nullable();
                $table->string('pengukuran_turun_150_3', 10)->nullable();
                $table->string('pengukuran_turun_150_4', 10)->nullable();
                $table->string('pengukuran_turun_150_5', 10)->nullable();
                $table->string('pengukuran_turun_150_6', 10)->nullable();
                $table->string('pengukuran_turun_200_1', 10)->nullable();
                $table->string('pengukuran_turun_200_2', 10)->nullable();
                $table->string('pengukuran_turun_200_3', 10)->nullable();
                $table->string('pengukuran_turun_200_4', 10)->nullable();
                $table->string('pengukuran_turun_200_5', 10)->nullable();
                $table->string('pengukuran_turun_200_6', 10)->nullable();
                $table->string('pengukuran_turun_250_1', 10)->nullable();
                $table->string('pengukuran_turun_250_2', 10)->nullable();
                $table->string('pengukuran_turun_250_3', 10)->nullable();
                $table->string('pengukuran_turun_250_4', 10)->nullable();
                $table->string('pengukuran_turun_250_5', 10)->nullable();
                $table->string('pengukuran_turun_250_6', 10)->nullable();
                $table->timestamps();
            });
        }

        /**
         * Reverse the migrations.
         *
         * @return void
         */
        public function down()
        {
            Schema::dropIfExists('sphygmomanometers');
        }
    };
