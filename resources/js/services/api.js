import axios from 'axios';

export default {
    getBanners() {
        return axios.get('/api/banners')
            .then(response => response.data)
            .catch(error => {
                console.error('Error fetching banners:', error);
                throw error
            });
    },

    getLogos() {
        return axios.get('/api/logos')
            .then(response => response.data)
            .catch(error => {
                console.error('Error fetching logos:', error);
                throw error
            });
    },

    getAbouts() {
        return axios.get('/api/abouts')
            .then(response => response.data)
            .catch(error => {
                console.error('Error fetching abouts:', error);
                throw error
            });
    },

    getCards() {
        return axios.get('/api/cards')
            .then(response => response.data)
            .catch(error => {
                console.error('Error fetching cards:', error);
                throw error
            });
    },

    getContents() {
        return axios.get('/api/contents')
            .then(response => response.data)
            .catch(error => {
                console.error('Error fetching contents:', error);
                throw error
            });
    },

    getFooters() {
        return axios.get('/api/footers')
            .then(response => response.data)
            .catch(error => {
                console.error('Error fetching footers:', error);
                throw error
            });
    },

    getFooterContacts() {
        return axios.get('/api/footer-contacts')
            .then(response => response.data)
            .catch(error => {
                console.error('Error fetching footer contacts:', error);
                throw error
            });
    },

    getGalleries() {
        return axios.get('/api/galleries')
            .then(response => response.data)
            .catch(error => {
                console.error('Error fetching galleries:', error);
                throw error
            });
    },

    getLastGalleries() {
        return axios.get('/api/galleries-last')
            .then(response => response.data)
            .catch(error => {
                console.error('Error fetching galleries:', error);
                throw error
            });
    },

    getServices() {
        return axios.get('/api/services')
            .then(response => response.data)
            .catch(error => {
                console.error('Error fetching services:', error);
                throw error
            });
    },

    getAboutBanner() {
        return axios.get('/api/abouts-banner')
            .then(response => response.data)
            .catch(error => {
                console.error('Error fetching services:', error);
                throw error
            });
    },
}
