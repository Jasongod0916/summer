import { MemoryVectorStore } from "langchain/vectorstores/memory";
import { OpenAIEmbeddings } from "langchain/embeddings/openai";
import { HuggingFaceInferenceEmbeddings } from "langchain/embeddings/hf";

const embeddings = new HuggingFaceInferenceEmbeddings({
  apiKey: process.env.HUGGINGFACEHUB_API_KEY, // In Node.js defaults to process.env.HUGGINGFACEHUB_API_KEY
});


const vectorStore = await MemoryVectorStore.fromTexts(
  ["Hello world", "Bye bye", "hello nice world"],
  [{ id: 2 }, { id: 1 }, { id: 3 }],
  embeddings
);

const resultOne = await vectorStore.similaritySearch("bye", 1);
console.log(resultOne);

/*
  [
    Document {
      pageContent: "Hello world",
      metadata: { id: 2 }
    }
  ]
*/