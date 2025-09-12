<?php

namespace App\Console\Commands;

use App\Helpers\Helper;
use Illuminate\Console\Command;
use App\Traits\NameSpaceFixer;
use Illuminate\Support\Facades\File;

class MakeService extends Command
{

    // use NameSpaceFixer;

    protected $basePathInterface = 'App\Http\Services\Interfaces';
    protected $basePathRepository = 'App\Http\Services\{filename}';

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:service {filename}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new Interface and Repository';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $interfaceName = $this->argument('filename');

        if ($interfaceName === '' || is_null($interfaceName) || empty($interfaceName)) {
            $this->error('Invalid Interface name...!');
        }
    }


    /**
     * create interface
     */
    public function createInterface($interfaceName)
    {
        $interfaceName = $interfaceName . 'Interface';

        if (!File::exists($this->getBaseDirectory($this->basePathInterface, $interfaceName))) {
            File::makeDirectory($this->getBaseDirectory($this->basePathInterface, $interfaceName), 0777, true);
        }

        $title = Helper::title($interfaceName);

        $interfaceFileName = 'app/Http/Services/Interfaces/' . $title . '.php';

        if (!File::exists($interfaceFileName)) {
            $interfaceContent = "<?php\n\nnamespace " . $this->basePathInterface
                . ";\n"
                . "\nuse Illuminate\Database\Eloquent\Collection;"
                . "\n\n"
                . "interface " . $interfaceName
                . "\n{\n"

                . "\t/**"
                . "\n\t * params string \$search"
                . "\n\t * @return Collection"
                . "\n\t*/"

                . "\n\n"
                . "\tpublic function paginated(array \$request);\n}";

            File::put($interfaceFileName, $interfaceContent);
            $this->info('Service created successfully.');
        } else {
            $this->error('Service already exists.');
        }
    }

    /**
     * create repository
     */
    public function createRepository($repoName)
    {
        $repoName = $repoName . "Repository";

        if (!File::exists($this->getBaseDirectory($this->basePathRepository, $repoName))) {
            File::makeDirectory($this->getBaseDirectory($this->basePathRepository, $repoName), 0777, true);
        }

        $title = Helper::title($repoName);

        $nameModel = str_replace('Repository', '', $repoName);
        $repoFileName = 'app/Http/Services/' . $repoName . '/' . $title . '.php';
        $nameInterface = str_replace('Repository', 'Interface', $repoName);

        if (!File::exists($repoFileName)) {
            $repoContent = "<?php\n\nnamespace " . $this->basePathRepository
                . ";\n"
                . "\nuse App\Http\Services\Repositories\BaseRepository;"
                . "\nuse App\Http\Services\Repositories\Contracts\\" . $nameInterface
                . ";\nuse App\Models\\" . $nameModel

                . ";\n\nclass " . $repoName . " extends BaseRepository implements " . $nameInterface
                . "\n{\n"

                . "\t/**"
                . "\n\t * @var"
                . "\n\t */\n"

                . "\tprotected \$model;\n\n"
                . "\tpublic function __construct(" . $nameModel . " \$model)\n"
                . "\t{\n"
                . "\t\t\$this->model = \$model;\n"
                . "\t}\n\n"

                . "\tpublic function paginated(array \$criteria)"
                . "\n\t{\n"
                . "\t\t\$perPage = \$criteria['per_page'] ?? 5;\n"
                . "\t\t\$field = \$criteria['sort_field'] ?? 'id';\n"
                . "\t\t\$sortOrder = \$criteria['sort_order'] ?? 'desc';\n"
                . "\t\t"
                . "return \$this->model->orderBy(\$field, \$sortOrder)->paginate(\$perPage);"
                . "\n\t}\n"
                . "\n}";

            File::put($repoFileName, $repoContent);

            $this->info('Service Created Successfully.');
        } else {
            $this->error('Service Files Already Exists.');
        }
    }

    /**
     * create file service
     */
    public function createService($serviceName)
    {
        $serviceName = $serviceName . "Service";

        if (!File::exists($this->getBaseDirectory($this->basePathRepository, $serviceName))) {
            File::makeDirectory($this->getBaseDirectory($this->basePathRepository, $serviceName), 0777, true);
        }

        $title = Helper::title($serviceName);

        $repoFileName = 'app/Http/Services/' . $serviceName . '/' . $title . '.php';
        $nameInterface = str_replace('Repository', 'Interface', $serviceName);

        if (!File::exists($repoFileName)) {
            $repoContent = "<?php\n\nnamespace " . $this->basePathRepository
                . ";\n"
                . "\nuse App\Http\Services\Repositories\BaseRepository;"
                . "\nuse App\Http\Services\Repositories\Contracts\\" . $nameInterface

                . ";\n\nclass " . $serviceName . " extends BaseRepository implements " . $nameInterface
                . "\n{\n"

                . "\t/**"
                . "\n\t * @var"
                . "\n\t */\n"

                . "\n\t}\n"
                . "\n}";

            File::put($repoFileName, $repoContent);

            $this->info('Service Created Successfully.');
        } else {
            $this->error('Service Files Already Exists.');
        }
    }
}
