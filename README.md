# Twitter Feed Widget

**Twitter Feed Widget** is a custom WordPress widget plugin that allows users to embed a live Twitter timeline feed into their WordPress website. Provide a Twitter username, and the widget will display the user's latest tweets.

---

## Features

- Displays a Twitter timeline feed for a given username.
- Easy-to-use widget interface in the WordPress dashboard.
- Fully responsive and styled using Twitter's official widget script.
- Minimal setup is required; just enter a Twitter username.

---

## Installation

1. **Download the Plugin**
   - Clone this repository or download the `twidget.php` file.

2. **Upload to WordPress**
   - Place the `twidget.php` file in the `/wp-content/plugins/` directory.

3. **Activate the Plugin**
   - Go to the WordPress Admin Dashboard → Plugins.
   - Locate the "Twitter Feed Widget" plugin and click **Activate**.

---

## Usage

1. **Add the Widget**
   - Navigate to `Appearance → Widgets` in your WordPress admin panel.
   - Drag the "Twitter Feed" widget into your desired widget area (e.g., sidebar, footer).

2. **Configure the Widget**
   - Enter the Twitter username for the feed you'd like to display.
   - Save the widget settings.

3. **View the Widget**
   - You can visit your site to see the live Twitter feed displayed in the chosen widget area.

---

## Customization

### Default Username
To set a default Twitter username, modify this line in the `form()` method:
```php
$username = !empty($instance['username']) ? $instance['username'] : 'twitter';
