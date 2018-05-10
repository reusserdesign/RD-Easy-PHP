# RD-Easy-PHP
Whether adding a lot or a little, enabling PHP code in your ExpressionEngine templates can be problematic. We developed this simple add-on to be able to use PHP in templates without having to enable PHP in the template itself.

![](https://img.shields.io/badge/ExpressionEngine-3-3784B0.svg)
![](https://img.shields.io/badge/ExpressionEngine-4-3784B0.svg)

### The Tag
```
{exp:rd_easy_php file="path/to/file.php"}
```

### Requirements
The only required tag is 'file' as this tells the add-on where to find the php file to load.

### How does it work?
Simply put - the add-on will load the specified PHP file and spit back whatever code that file returns.

### Sounds great, but what if I want to send data to the PHP file?
No problem! This add-on was designed with flexibilty in mind.

Any parameter you pass to the add-on will be available to the PHP file in the 'template_vars' array. So if I had the following tag...

```
{exp:rd_easy_php file="path/to/file.php" tv_show="Stargate"}
```

In my PHP file, I could then access the parameter as follows...

```
$tv_show = $template_vars['tv_show'];
```

You can even get creative and pass grid data into a single parameter, and then use PHP to explode it into a workable array in your file.
