custom-angularjs-slider
===========================

Custom AngularJS slider directive to work on most mobile devices, including Windows powered mobile devices.

Usage
=====
Once you've checked that everything is in place, you can use this directive like so:

```html
<custom-js-slider range-interval="150" min-range="100" max-range="1000" range-increment-flag="true"></custom-js-slider>
```

Parameters
==========
range-interval, min-range, max-range -> Scope controlled values


range-increment-flag
It takes a boolean value. True means that the slider will automatically apply an incrementation taking maximum value into account.
For instance, when set to true, the incrementation will be done like so:

max-range >= 10 -> incrementation by 1
max-range >= 100 -> incrementation by 10
max-range >= 1000 -> incrementation by 100
max-range >= 100000 -> incrementation by 1000
and so on