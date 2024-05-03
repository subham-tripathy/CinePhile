import React, { useEffect } from 'react'
import NavBar from './Components/NavBar'

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
      <NavBar active={'home'}/>
    </>
  )
}

export default index