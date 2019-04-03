#include<iostream>
#include<string>
using namespace std;
int main()
{
	string in, out;
	cin >> in;
	out = in;
	for (int i = 0; i < out.length(); i++)
	{
		out[i] = in[out.length() - 1 - i];
	}
	cout << out << endl;
	//cin.get();
	//cin.get();
	return 0;
}