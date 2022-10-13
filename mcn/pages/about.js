import Head from 'next/head'
import styles from '../styles/Home.module.css'

function About(){
    return(

        <div className='about'>
        <Head>
        <title>MCN</title>
        </Head>
        <main>
            <p>Ce projet a pour but de vulgariser des outils de Cybersécurité</p>
        </main>
        </div>

    );
}

export default About;