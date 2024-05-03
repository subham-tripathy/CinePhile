import React from 'react'
import NavBar from './Components/NavBar'
import Link from 'next/link'

const signin = () => {
    return (
        <div>
            <NavBar active={'signin'} />
            <div className='w-full pt-16 mx-auto flex justify-center items-center'>
                <form className='mx-auto w-[50%] pb-20 text-center bg-[gold] space-y-5 rounded border-2 border-white'>
                    <h1 className='underline underline-offset-4 mt-12 mb-10 text-5xl text-white text-shadow'>Cinephile Sign In Page</h1>
                    <input className='pl-3 p-1 text-xl rounded shadow shadow-black' type="text" placeholder='Enter ID' name='id' />
                    <br />
                    <input className='pl-3 p-1 text-xl rounded shadow shadow-black' type="password" placeholder='Enter Password' name='password' />
                    <br />
                    <p><Link href={'/forgotpassword'}>forgot password ?</Link></p>
                    <br />
                    <button className='bg-[#e50914] text-lg text-white px-3 py-1 rounded shadow shadow-black border border-white' type="submit">Sign In</button>
                </form>
            </div>
        </div>
    )
}

export default signin