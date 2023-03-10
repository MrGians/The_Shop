import "./bootstrap";
import "~resources/scss/front.scss";
import * as bootstrap from "bootstrap";
import.meta.glob(["../img/**"]);

// VueJS
import { createApp } from "vue";
import App from "./components/App.vue";

createApp(App).mount("#root");
