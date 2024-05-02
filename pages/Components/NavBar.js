import React from 'react'

const NavBar = () => {
    return (
        <nav className='min-h-10 flex justify-between items-center pl-5 pr-10 py-3'>
            <h1 className='text-3xl font-bold text-white text-shadow'>CinePhile</h1>
            <ul className='flex space-x-10 text-lg text-white font-semibold text-shadow'>
                <li>Home</li>
                <li>Sign In</li>
                <li>Sign Up</li>
                <li>About</li>
            </ul>
        </nav>
    )
}

export default NavBar