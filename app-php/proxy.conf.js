const PROXY_CONFIG = [
    {
        context: ['/api'],
        target: 'http://www.nazarick.com/',
        secure: false,
        logLevel: 'debug',
        pathRewrite: {'^/api': ''}
    }
];
module.exports = PROXY_CONFIG;