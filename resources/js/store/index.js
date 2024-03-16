import {createStore } from 'vuex';
import {localModule} from "./modules/localModule.js";

export default createStore({
    modules: {
        local: localModule
    }
});
