require('./bootstrap');
import { createApp } from 'vue';

import App from './components/App.vue';
import ExampleComponent from './components/ExampleComponent.vue';
import SuccessMessage from './components/SuccessMessage.vue';


const app=createApp(App);
app.component('example-component', ExampleComponent);
app.component('success-message', SuccessMessage);
app.mount("#app");