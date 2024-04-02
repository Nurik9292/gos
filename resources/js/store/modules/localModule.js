
export const localModule = {
    state() {
        return {
            local: 'ru'
        }
    },

    getters: {
        GET_LOCAL(state){
            return state.local;
        }
    },


    mutations: {
        SET_LOCAL(state, newLocale) {
            state.locale = newLocale;
        },
    },

    actions: {

    },

    namespaced: true,

}
