export default {
  darkMode: 'class',
  important: '#top-sellers',
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php"
  ],
  corePlugins: {
    preflight: false,
  },
};