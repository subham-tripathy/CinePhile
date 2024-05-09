import Link from 'next/link'
import React, { useEffect } from 'react'
import NavBar from './Components/NavBar'

const search = () => {
    useEffect(() => {
        const searchResult = document.getElementById('searchResult')
        const query = new URLSearchParams(window.location.search).get('query')
        fetch("/api/search?query=" + query).then(res => res.json()).then(data => {
            const movies = data.results
            movies.forEach(element => {
                const a = document.createElement('a')
                a.href = "/movie?id=" + element.id
                a.classList.add('flex')
                a.classList.add('bg-[gold]')
                a.classList.add('w-[95%]')
                a.classList.add('mx-auto')
                a.classList.add('p-2')
                a.classList.add('rounded')
                
                const img = document.createElement('img')
                img.src = "https://image.tmdb.org/t/p/w92" + element.poster_path
                img.alt = element.title
                img.classList.add('mr-5')

                const name = document.createElement('p')
                name.textContent = element.title

                const date = document.createElement('p')
                date.textContent = element.release_date

                const overview = document.createElement('p')
                overview.textContent = element.overview

                const div = document.createElement('div')

                div.appendChild(name)
                div.appendChild(date)
                div.appendChild(overview)

                a.appendChild(img)
                a.appendChild(div)
                searchResult.appendChild(a)
            });
        })
    }, [])





    return (
        <>
            <NavBar />
            <br />
            <div id='searchResult' className='flex flex-col space-y-5'>
            </div>
        </>
    )
}

export default search