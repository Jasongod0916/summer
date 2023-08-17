import { MemoryVectorStore } from "langchain/vectorstores/memory";
import { HuggingFaceInferenceEmbeddings } from "langchain/embeddings/hf";
import { OpenAIEmbeddings } from "langchain/embeddings/openai";


const embeddings = new HuggingFaceInferenceEmbeddings({
  apiKey: process.env.HUGGINGFACEHUB_API_KEY, // In Node.js defaults to process.env.HUGGINGFACEHUB_API_KEY
});
// const embeddings1 = new OpenAIEmbeddings();


import { TextLoader } from "langchain/document_loaders/fs/text";
import { RecursiveCharacterTextSplitter } from "langchain/text_splitter";

// Create docs with a loader
const loader = new TextLoader("llmwiki.txt");
const docs = await loader.load();

const splitter = new RecursiveCharacterTextSplitter({
    chunkSize: 500,
    chunkOverlap: 50
})

const docsoutput = await splitter.splitDocuments( docs )
console.log( docsoutput.length );

// Load the docs into the vector store
const vectorStore = await MemoryVectorStore.fromDocuments(
  docsoutput,
  embeddings
);

// Search for the most similar document
const resultOne = await vectorStore.similaritySearch("when the uni-directional Transformers has been used", 3);

console.log(resultOne);