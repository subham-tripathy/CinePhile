export default function handler(req, res) {
    const { query } = req.query;
    fetch(process.env.API_URL + "search/movie?&api_key=" + process.env.API_KEY + "&query=" + query).then(response => response.json()).then(data => {
        res.status(200).json(data);
    })
}
