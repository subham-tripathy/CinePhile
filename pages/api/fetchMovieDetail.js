export default function handler(req, res) {
    const { id } = req.query;

    fetch(process.env.API_URL + "/movie/" + id + "?api_key=" + process.env.API_KEY).then(response => response.json()).then(data => {
        res.status(200).json(data);
    })
}
