import React, { useEffect } from 'react'
import NavBar from './Components/NavBar'

const movie = () => {
    useEffect(() => {
        const id = new URLSearchParams(window.location.search).get('id')
        const main = document.querySelector('#main')
        fetch("/api/fetchMovieDetail?id=" + id).then(res => res.json()).then(data => {
            console.log(data)
            document.querySelector('#title').textContent = data.title
            document.querySelector('#release_date').textContent = data.release_date
            document.querySelector('#status').textContent = 'Status: ' + data.status
            let genres = ''
            data.genres.forEach(genre => {
                genres += genre.name + ', '
            })
            let runtime = parseInt(data.runtime / 60) + 'h ' + data.runtime % 60 + 'min'
            document.querySelector('#genres').textContent = genres.slice(0, -2)
            document.querySelector('#runtime').textContent = 'Duration: ' + runtime
            document.querySelector('#overview').textContent = 'Overview: ' + data.overview
            // document.querySelector('#name').textContent = data.name
            // document.querySelector('#name').textContent = data.name
            // document.querySelector('#name').textContent = data.name
            document.querySelector('#budget').textContent = 'Budget: $ ' + data.budget
            document.querySelector('#revenue').textContent = 'Revenue: $ ' + data.revenue
            document.querySelector('#poster').src = "https://image.tmdb.org/t/p/w342" + data.poster_path
            document.querySelector('#mainBG').src = "https://image.tmdb.org/t/p/original" + data.backdrop_path
        })
    }, [])
    return (
        <>
            <NavBar />
            <div id='main'>
                <img id='mainBG' src="" alt="" className='-z-10 w-full absolute' />
                <div className='relative flex bg-[#000000cc] top-5 text-white text-shadow border border-white p-5 space-x-7 w-[97%] mx-auto'>
                    <img id='poster' src="" alt="" className=' border border-white rounded-sm h-[65vh]' />
                    <div className='flex flex-col space-y-7'>
                        <div className='flex space-x-10 w-max items-center'>
                            <p id="title" className='text-lg'></p>
                            <p id="release_date"></p>
                        </div>
                        <p id="status"></p>
                        <p id="genres"></p>
                        <p id="runtime"></p>
                        <p id="overview"></p>
                        <p id="budget"></p>
                        <p id="revenue"></p>
                    </div>
                </div>
            </div>
        </>
    )
}

export default movie