# Multi-Language Support (Arabic & English)

This project supports both Arabic (RTL) and English (LTR) layouts.

## HTML Structure
Modify the `<html>` tag based on the selected language:

### For Arabic (RTL) Version:
```html
<html lang="ar" dir="rtl">
```
✅ This ensures proper right-to-left (RTL) text alignment.

✅ You also need to **add** the following stylesheet for RTL support:
```html
<link rel="stylesheet" href="assets/css/rtl.css">
```

### For English (LTR) Version:
```html
<html lang="en" dir="ltr">
```
✅ This ensures proper left-to-right (LTR) text alignment.

❌ **Remove** the RTL stylesheet:
```html
<!-- Remove this line -->
<link rel="stylesheet" href="assets/css/rtl.css">
```

