# Ray-Debugger

### Using Composer
Since this module isn't published as a package to a repository, using composer to install the module necessitates modifying the root composer.json file for the site.

Option 1 is to add the module as a package by adding an entry to `repositories:[]` (see below) and running `composer require drupal/ray_debugger`:
```
    "repositories": [
        {
            "type": "composer",
            "url": "https://packages.drupal.org/8"
        },
        {
            "type": "package",
            "package": {
                "name": "drupal/ray_debugger",
                "version": "1.0.0",
                "type": "drupal-custom-module",
                "source": {
                    "url": "https://github.com/Smithsonian/Ray-Debugger.git",
                    "type": "git",
                    "reference": "main"
                }
            }
        }
    ],
