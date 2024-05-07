export default function handler(req, res) {
    const { query } = req.query;
    fetch(process.env.mainURL + "search/movie?&api_key=" + process.env.api_key + "&query=" + query).then(response => response.json()).then(data => {
        res.status(200).json(data);
    })
}
