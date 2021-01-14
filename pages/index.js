import Head from 'next/head'
import Link from 'next/link'
import Date from '../components/date'
import Layout, { siteTitle } from '../components/layout'
import utilStyles from '../styles/utils.module.css'
import { getSortedPostsData } from '../lib/posts'

export async function getStaticProps() {
  const allPostsData = getSortedPostsData()
  return {
    props: {
      allPostsData
    }
  }
}

export default function Home({ allPostsData }) {
  return (
    <Layout home>
      <Head>
        <title>{siteTitle}</title>
      </Head>
      <section className={utilStyles.headingMd}>
        <p>
          Programador fullstack e analista de banco de dados. Guitarrista amador
          e chefe de cozinha nas horas vagas.
        </p>
        <p>
          (This is a sample website - you’ll be building a site like this on{' '}
          <a href="https://nextjs.org/learn">our Next.js tutorial</a>.)
        </p>
      </section>
      <section className={`${utilStyles.headingMd} ${utilStyles.padding1px}`}>
        <h2 className={utilStyles.headingLg}>Blog</h2>
        <ul className={utilStyles.list}>
          {allPostsData.map(({ id, date, title }) => (
            <li className={utilStyles.listItem} key={id}>
              <Link href={`/posts/${id}`}>
                <a>{title}</a>
              </Link>
              <br />
              <small className={utilStyles.lightText}>
                <Date dateString={date} />
              </small>
            </li>
          ))}
        </ul>
      </section>
      <script type="text/javascript">window.piperun_data = {"form":{"header":{"text":"Quero Entrar Em Contato","background_color":"#075E54","color":"#FFFFFF"},"content":{"fields":[{"field":"name","type":"Pessoa","name":"Nome","id":"item_17","required":false},{"field":"cpf","type":"Pessoa","name":"CPF","id":"item_24","required":false},{"field":"email","type":"Pessoa","name":"E-mail","id":"item_18","required":false},{"field":"mobile_phone","type":"Pessoa","name":"Telefone","id":"item_19","required":false},{"field":"notes","type":"Oportunidade","name":"Mensagem","id":"item_0","required":false}],"background_color":"#ECE5DD","color":"#2F2F2F"},"button":{"text":"Salvar","background_color":"#5CB85C","color":"#FFFFFF"},"accept":{"text":" Concordo em receber comunicações de ofertas personalizadas de acordo com meus interesses.","color":"#2F2F2F"},"logo":{"color":"#25D366"}},"enterprise":"false","hash":"00c3f6ae-b5ea-4d5b-bcc1-9eac73d5d506","contact_phone":"55991637123","success_page_url":"","google_analytics":""};</script>
      <script src="https://crmpiperun.github.io/whatsapp-gerador-lead/script.js" type="text/javascript"></script>
    </Layout>
  )
}