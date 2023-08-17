import { OpenAIEmbeddings } from "langchain/embeddings/openai";

/* Create instance */
const embeddings = new OpenAIEmbeddings();

/* Embed queries */
const res = await embeddings.embedQuery("真是個好天氣");
const documentRes = await embeddings.embedDocuments(["Hello world", "Bye bye"]);

console.log( res.length)
console.log( res )

console.log( documentRes.length)