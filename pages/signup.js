import React from 'react'
import NavBar from './Components/NavBar'

const signup = () => {
    return (
        <div>
            <NavBar active={'signup'} />
            <div className='w-full pt-8 mx-auto flex justify-center items-center'>
                <form className='mx-auto w-[50%] pb-10 text-center bg-[gold] space-y-5 rounded border-2 border-white'>
                    <h1 className='underline underline-offset-4 mt-12 mb-10 text-5xl text-white text-shadow'>Cinephile Sign Up Page</h1>

                    <input className='pl-3 p-1 text-xl rounded shadow shadow-black' type="text" placeholder='Enter Name' name='name' />
                    <br />
                    <input className='pl-3 p-1 text-xl rounded shadow shadow-black' type="email" placeholder='Enter Email' name='email' />
                    <br />
                    <input className='pl-3 p-1 text-xl rounded shadow shadow-black' type="text" placeholder='Enter ID' name='id' />
                    <br />
                    <input className='pl-3 p-1 text-xl rounded shadow shadow-black' type="password" placeholder='Enter Password' name='password' />
                    <br />
                    <input className='pl-3 p-1 text-xl rounded shadow shadow-black' type="password" placeholder='Confirm Password' name='cpassword' />
                    <br />
                    <button className='bg-[#e50914] text-lg text-white px-3 py-1 rounded shadow shadow-black border border-white' type="submit">Sign In</button>
                </form>
            </div>
        </div>
    )
}

export default signup