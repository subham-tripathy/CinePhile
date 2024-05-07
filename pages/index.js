import React, { useEffect } from 'react'
import NavBar from './Components/NavBar'
import Caraousel from './Components/Caraousel'
import PopularComponent from './Components/PopularComponent'
import TrendingComponent from './Components/TrendingComponent'
import SearchByActors from './Components/SearchByActors'

const index = () => {

  useEffect(() => {
    // setting the TITLE of the Home Page
    if (document.querySelector("title") == null) {
      const title = document.createElement("title")
      title.textContent = "Home - CinePhile"
      document.querySelector('head').appendChild(title)
    }
    else {
      document.createElement("title").textContent = "Home - CinePhile"
    }


  }, [])



  return (
    <>
      <NavBar active={'home'} />
      <Caraousel />
      <PopularComponent />
      <hr className='w-[95%] mx-auto my-0 p-0 border border-[gold]' />
      <TrendingComponent />
      <hr className='w-[95%] mx-auto my-0 p-0 border border-[gold]' />
      <SearchByActors />
    </>
  )
}

export default index