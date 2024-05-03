import Link from 'next/link'
import React from 'react'
import Search from './Search'

const NavBar = ({ active }) => {
    return (
        <nav className='min-h-10 flex justify-between items-center px-5 py-3 bg-[gold] shadow-md shadow-black text-[#e50914] text-shadow-sm'>
            <h1><Link href={'/'} className='text-shadow text-4xl text-white hover:text-shadow-sm hover:text-[#e50914]'>CinePhile</Link></h1>





            <Search />





            <ul className='flex space-x-3 text-lg'>
                {
                    active == 'home' ?
                        <li><Link className='px-3.5 py-1.5 rounded shadow shadow-black bg-[#e50914] text-[white]' href={'/'}>Home</Link></li>
                        :
                        <li><Link className='px-3.5 py-1.5 rounded bg-[silver] text-white' href={'/'}>Home</Link></li>
                }

                {
                    active == 'signin' ?
                        <li><Link className='px-3.5 py-1.5 rounded shadow shadow-black bg-[#e50914] text-[white]' href={'/signin'}>Sign In</Link></li>
                        :
                        <li><Link className='px-3.5 py-1.5 rounded bg-[silver] text-white' href={'/signin'}>Sign In</Link></li>
                }

                {
                    active == 'signup' ?
                        <li><Link className='px-3.5 py-1.5 rounded shadow shadow-black bg-[#e50914] text-[white]' href={'/signup'}>Sign Up</Link></li>
                        :
                        <li><Link className='px-3.5 py-1.5 rounded bg-[silver] text-white' href={'/signup'}>Sign Up</Link></li>
                }

                {
                    active == 'about' ?
                        <li><Link className='px-3.5 py-1.5 rounded shadow shadow-black bg-[#e50914] text-[white]' href={'/about'}>About</Link></li>
                        :
                        <li><Link className='px-3.5 py-1.5 rounded bg-[silver] text-white' href={'/about'}>About</Link></li>
                }

            </ul>
        </nav>
    )
}

export default NavBar