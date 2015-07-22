import json, csv;
import collections

f = open("/tmp/data.json");
content = f.read();
f.close();

data = json.loads(content, object_pairs_hook=collections.OrderedDict);

def union(lists):
	if(len(lists) == 0):
		return [];
	outp = set(lists[0]);
	for i in range(1, len(lists)):
		outp = outp.union(lists[i]);
	return list(outp);



keys = union(list(i.keys() for i in data["data"]))



with open('/tmp/data.csv', 'wb') as csvfile:
	spamwriter = csv.writer(csvfile)
	spamwriter.writerow(keys);
	for j in data["data"]:
		insrow=[];
		for i in keys:
			insrow.append(j[i] if j.has_key(i) else '');
#		print insrow;
		spamwriter.writerow( insrow )

