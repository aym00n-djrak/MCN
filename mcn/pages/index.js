import Link from 'next/link'
import Head from 'next/head'
import styles from '../styles/Home.module.css'

export default function Home() {
  return (
    <div className={styles.container}>
      <Head>
        <title>MCN</title>
        <meta name="description" content="Generated by create next app" />
        <link rel="icon" href="/favicon.ico" />
      </Head>

    <main className={styles.main}>
      <h1>Bienvenue chez MCN</h1>
      <div className='bouton'>
        <nav>
         <Link href='/enter'><a>Enter</a></Link>
         </nav>
      </div>
    </main>

      <footer className={styles.footer}>

      </footer>
    </div>
  )
}
