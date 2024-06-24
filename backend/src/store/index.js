import { createStore } from "vuex";
// import * as actions from './actions';
// import * as mutations from './mutations';

const store = createStore({
    state: {
       user: {
        data: {}
       } 
    },
    getters: {},
})

export default store;