// src/plugins/datePlugin.js

export default {
    install(app) {
        app.config.globalProperties.$formatDate = function(isoString) {
            const options = {
                day: 'numeric',
                month: 'short',
                year: 'numeric',
                hour: 'numeric',
                minute: 'numeric',
                hour12: true
            };
            return new Date(isoString).toLocaleString('en-US', options);
        };
    }
};
