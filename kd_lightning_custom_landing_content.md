This Page is an example post-installation path on a site that has extended Lightning.

Using the `lightning.extender.yml` file provided with Lightning, the following has taken place post-installation of Lightning:

* The Acme Custom module has been enabled which:
    * Sets a new theme
    * Deletes the content types that ship with Lightning
* The Features module has been enabled and the following Features have been enabled:
    * Blog: Creates a Blog content type and associated taxonomy
    * Theme Settings: Defines some settings for the Acme theme
    * You have been redirected to this custom page

The `lightning.extender.yml` file ships with Lightning. To use it, copy it to your `sites/default` or `sites/SITE_NAME` directory and customize it to your needs. The `lightning.extender.yml` file used in this example is duplicated below:
