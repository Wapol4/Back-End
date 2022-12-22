const axios =  require('../../../WebsiteTravel[CI-CD]/node_modules/axios');

const { TIMEOUT } = process.env;

module.exports = (baseUrl) => {
    return axios.create({
        baseUrl: baseUrl,
        timeout: TIMEOUT
    });
}