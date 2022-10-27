# Symfony Extensions

Extensions and Filters for Symfony

# md5

This filter is useful if you want to hash a string inside your twig template

Place the file `AppExtension.php` inside the `src/Twig` directory. If you're using the [default services.yaml configuration](https://symfony.com/doc/current/service_container.html#service-container-services-load-example), you're done! Symfony will automatically know about your new service and add the tag.

### Usage

Assuming you have a variable called `name` and you wanto to md5 this variable.

In your twig template write:

`{{ name | md5 }}`

And you are done!
