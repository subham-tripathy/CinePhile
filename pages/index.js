import React, { useEffect } from 'react'
import NavBar from './Components/NavBar'
import Caraousel from './Components/Caraousel'

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
    </>
  )
}

export default index