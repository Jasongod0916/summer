// 基本款 retriever
// 
import { OpenAI } from "langchain/llms/openai";
import { RetrievalQAChain } from "langchain/chains";
import { HNSWLib } from "langchain/vectorstores/hnswlib";
import { OpenAIEmbeddings } from "langchain/embeddings/openai";
import { RecursiveCharacterTextSplitter } from "langchain/text_splitter";
import * as fs from "fs";
import { TextLoader } from "langchain/document_loaders/fs/text";
// Initialize the LLM to use to answer the question.
const model = new OpenAI({});
const text = fs.readFileSync("chatgptisablurjpg.txt", "utf8");
// const loader = new TextLoader("chatgptisablurjpg.txt");
// const text = await loader.load();

const textSplitter = new RecursiveCharacterTextSplitter({ chunkSize: 1000 });
const docs = await textSplitter.createDocuments([text]);

// Create a vector store from the documents.
const vectorStore = await HNSWLib.fromDocuments(docs, new OpenAIEmbeddings());

// Initialize a retriever wrapper around the vector store
const vectorStoreRetriever = vectorStore.asRetriever();

// Create a chain that uses the OpenAI LLM and HNSWLib vector store.
const chain = RetrievalQAChain.fromLLM(model, vectorStoreRetriever);
const res = await chain.call({
  query: "ChatGPT 在文章中被比喻為甚麼？",
});
console.log({ res });
/*
{
  res: {
    text: 'The president said that Justice Breyer was an Army veteran, Constitutional scholar,
    and retiring Justice of the United States Supreme Court and thanked him for his service.'
  }
}
*/